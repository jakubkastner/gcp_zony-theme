// My styles
import "./sass/main.scss";

// Bootstrap JS
import "bootstrap";

// Own script
import { elements } from "./js/base";

// Intro - scroll to main content
if (elements.scrollBtn)
  elements.scrollBtn.addEventListener("click", () =>
    elements.mainContent.scrollIntoView()
  );

// Add animation on scroll to the elements with [data-animation]
const animationDataElements = () => {
  const animatedElements = Array.from(elements.animate);

  document.addEventListener("scroll", () => {
    animatedElements.forEach((e) => {
      // Check if element has been animated
      const alreadyAnimated = e.classList.contains("animated");
      if (alreadyAnimated) return;

      // Check if elements is visible
      const bottomScreen = window.pageYOffset + window.innerHeight;
      const elementIsVisible =
        bottomScreen > e.getBoundingClientRect().top + window.pageYOffset;
      if (!elementIsVisible) return;

      // Add animation styles to element
      e.style.animationName = e.dataset.animation;
      e.style.animationDuration = e.dataset.duration;
      e.style.animationDelay = e.dataset.delay;
      e.style.animationFillMode = "backwards";

      // Mark as animated to prevent animation
      e.classList.add("animated");
    });
  });
};
animationDataElements();

// Show loader on submit login form and dotaznik form
const loader = () => {
  const showLoader = (show) => {
    const loader = document.querySelector(".loader");
    show === "hide"
      ? loader.classList.remove("loader--active")
      : loader.classList.add("loader--active");
  };

  // Show loader on submit login or form
  if (elements.loginForm)
    elements.loginForm.addEventListener("submit", () => showLoader());
  if (elements.dotaznikForm)
    elements.dotaznikForm.addEventListener("submit", () => showLoader());

  // Show loader on page loading and hide when complete
  document.onreadystatechange = () => {
    if (document.readyState !== "complete") {
      document.querySelector("body").style.visibility = "hidden";
      showLoader();
    } else {
      showLoader("hide");
      document.querySelector("body").style.visibility = "visible";
    }
  };
};
loader();
