import axios, { AxiosError } from 'axios';
import { destroy, getSessionToken } from './sessionService';

const URL = `${window.wp_data.root_url}/wp-json`;

type Method = 'get' | 'post' | 'put' | 'patch' | 'options' | 'delete';

axios.interceptors.response.use(
  (response) => {
    // Do something with response data
    // return response body
    return response.data;
  },
  (error) => {
    // Handle response error
    _handleError(error);
    return Promise.reject(error);
  }
);

const apiRequest = async (
  method: Method,
  apiUrl: string,
  body: any,
  headers: any
) => {
  try {
    const apiToken = getSessionToken();
    const requestHeaders = !headers ? {} : headers;
    if (apiToken) requestHeaders['x-access-token'] = apiToken;
    if (method === 'get' || method === 'delete')
      return axios[method](URL + '/custom_theme/v1' + apiUrl, {
        headers: requestHeaders,
      });
    else if (method === 'post' || method === 'put' || method === 'patch') {
      return axios[method](URL + '/custom_theme/v1' + apiUrl, body, {
        headers: requestHeaders,
      });
    }
  } catch (err) {
    _handleError(err);
  }
};

const outsideRequest = async (
  method: Method,
  url: string,
  body?: any,
  headers?: any
) => {
  try {
    const requestHeaders = !headers ? {} : headers;

    if (method === 'get' || method === 'delete')
      return axios[method](url, { headers: requestHeaders });
    else if (method === 'post' || method === 'put')
      return axios[method](url, body, { headers });
  } catch (err) {
    _handleError(err);
  }
};

const _handleError = (err: AxiosError) => {
  let errorText = '';
  if (err && err.response) {
    if (err.response.status === 401 || err.response.status === 403) {
      // remove user data
      destroy();
    }
    if (
      err.response.data &&
      err.response.data.error &&
      err.response.data.error.message
    ) {
      errorText = err.response.data.error.message;
    } else {
      errorText = err.response.statusText;
    }
    console.warn(errorText);
  }
  throw err;
};

export { apiRequest, outsideRequest };
