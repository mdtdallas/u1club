const CACHE_NAME = "raffle-app-cache-v1";
const urlsToCache = [
    "/",
    "/favicon.ico",
    "/index.php",
    "/css/app.css",
    "/js/app.js",
    "/js/bootstrap.js",
    "/views/auth/login.blade.php",
    "/views/auth/register.blade.php",
    "/views/components/hero-three.blade.php",
    "/views/components/next-draw.blade.php",
    "/views/components/home-all-raffles-two.blade.php",
    "/views/components/home-all-raffles.blade.php",
    "/views/components/how-to-play.blade.php",
    "/views/components/latest-winners.blade.php",
    "/views/components/top-ten-winners.blade.php",
    "/views/components/testimonials.blade.php",
    "/views/components/overview.blade.php",
    "/views/components/support.blade.php",
    "/views/contact/contact.blade.php",
    "/views/home/index-four-dark.blade.php",
    "/views/layouts/dark.blade.php",
    "/views/layouts/modal.blade.php",
    "/views/layouts/admin.blade.php",
    "/views/myRaffles/index.blade.php",
    "/views/myRaffles/payment.blade.php",
    "/views/myRaffles/checkout.blade.php",
    "/views/profile/edit.blade.php",
    "/views/profile/show.blade.php",
    "/views/profile/user-info.blade.php",
    "/views/profile/user-transactions.blade.php",
    "/views/profile/partials/delete-user-form.blade.php",
    "/views/profile/partials/update-password-form.blade.php",
    "/views/profile/partials/update-profile-information-form.blade.php",
    "/views/profile/partials/update-user-photo-form.blade.php",
    "/views/raffles/checkTicketModal.blade.php",
    "/views/raffles/claimModal.blade.php",
    "/views/raffles/dark-index-two.blade.php",
    "/views/raffles/editRaffleModal.blade.php",
    "/views/raffles/enterRaffleModal.blade.php",
    "/views/raffles/index.blade.php",
    "/views/raffles/light-index-two.blade.php",
    "/views/raffles/show.blade.php",
    "/views/tickets/index.blade.php",
    "/views/tickets/edit.blade.php",
    "/views/winners/about.blade.php",
    "/views/winners/terms.blade.php",
    "/views/winners/privacy.blade.php",
    "/views/winners/faq.blade.php",
    // Add more URLs of assets to cache as needed
];

self.addEventListener("install", function (event) {
    event.waitUntil(
        caches.open(CACHE_NAME).then(function (cache) {
            return cache.addAll(urlsToCache);
        })
    );
});

self.addEventListener("fetch", function (event) {
    event.respondWith(
        caches.match(event.request).then(function (response) {
            // If the requested resource is present in the cache, return it
            if (response) {
                return response;
            }
            // Otherwise, fetch the resource from the network
            return fetch(event.request);
        })
    );
});
