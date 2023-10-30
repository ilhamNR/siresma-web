import $ from "jquery";
import 'bootstrap';

const tabLinks = document.querySelectorAll('.nav-link');
  tabLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      e.preventDefault(); // Prevent the default link behavior

      // Remove the 'active' class from all tab links
      tabLinks.forEach(tabLink => {
        tabLink.classList.remove('active');
      });

      const targetTabId = e.target.getAttribute('href'); // Get the target tab ID

      // Remove the 'active' class from all tab panes
      document.querySelectorAll('.tab-pane').forEach(tabPane => {
        tabPane.classList.remove('active');
      });

      // Add the 'active' class to the clicked tab link and the target tab pane
      e.target.classList.add('active');
      const targetTabPane = document.querySelector(targetTabId);
      console.log(targetTabId);
      targetTabPane.classList.add('active');
    });
  });
