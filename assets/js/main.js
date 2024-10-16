// import Alert from 'bootstrap/js/dist/alert';
// import Button from 'bootstrap/js/dist/button';
// import Carousel from 'bootstrap/js/dist/carousel';
// import Collapse from 'bootstrap/js/dist/collapse';
// import Dropdown from 'bootstrap/js/dist/dropdown';
// import Modal from 'bootstrap/js/dist/modal';
// import Offcanvas from 'bootstrap/js/dist/offcanvas';
// import Popover from 'bootstrap/js/dist/popover';
// import ScrollSpy from 'bootstrap/js/dist/scrollspy';
// import Tab from 'bootstrap/js/dist/tab';
// import Toast from 'bootstrap/js/dist/toast';
// import Tooltip from 'bootstrap/js/dist/tooltip';

import {
  // Alert,
  Button,
  // Carousel,
  // Collapse,
  Dropdown,
  Modal,
  // Offcanvas,
  // Popover,
  // ScrollSpy,
  // Tab,
  // Toast,
  // Tooltip
} from 'bootstrap';

console.log(
  // Alert,
  Button,
  // Carousel,
  // Collapse,
  Dropdown,
  Modal,
  // Offcanvas,
  // Popover,
  // ScrollSpy,
  // Tab,
  // Toast,
  // Tooltip
);

document.addEventListener('DOMContentLoaded', function() {
  var dropdownElements = document.querySelectorAll('.dropdown');
  dropdownElements.forEach(function(dropdown) {
    var dropdownMenu = new Dropdown(dropdown.querySelector('.dropdown-toggle'));
    
    dropdown.addEventListener('mouseenter', function() {
          dropdownMenu.show();
      });

      dropdown.addEventListener('mouseleave', function() {
          dropdownMenu.hide();
      });
  });
});
