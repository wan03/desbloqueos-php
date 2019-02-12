import axios from 'axios';
const mobiles = '/api/mobiles';
export function GetRequest(route) {
  return axios.get(`${mobile}${route}`);

}


