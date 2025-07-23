import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import '~bootstrap/dist/css/bootstrap.min.css'; 

import '../css/bootstrap.scss';
import '../css/dropdown.css'
import '../css/footer.css'

import { Alert, Button, Carousel, Collapse, Dropdown, Modal, Offcanvas, Popover, ScrollSpy, Tab, Toast, Tooltip }  from 'bootstrap';
window.bootstrap = { Alert, Button, Carousel, Collapse, Dropdown, Modal, Offcanvas, Popover, ScrollSpy, Tab, Toast, Tooltip };
