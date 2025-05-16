import axios from 'axios';

const api = axios.create({
  baseURL: 'http://apiportal.muniespinar.gob.pe/api', // dominio Laravel
  headers: {
    'Content-Type': 'application/json',
    Accept: 'application/json',
  },
});

api.interceptors.request.use((config) => {
  const token = typeof window !== 'undefined' ? localStorage.getItem('token') : null;
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});

export default api;
