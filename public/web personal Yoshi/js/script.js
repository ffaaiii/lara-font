// Contoh sederhana: Smooth scroll untuk link "Kembali ke Home"
document.addEventListener("DOMContentLoaded", () => {
  const homeLink = document.querySelector('#contact a[href="#"]');

  if (homeLink) {
    homeLink.addEventListener("click", (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
});
