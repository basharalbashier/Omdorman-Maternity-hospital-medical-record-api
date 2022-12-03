'use strict';
const MANIFEST = 'flutter-app-manifest';
const TEMP = 'flutter-temp-cache';
const CACHE_NAME = 'flutter-app-cache';
const RESOURCES = {
  "version.json": "8c835fffc2d767195fecdd980f205d28",
"splash/img/light-2x.png": "232e0d4a14c697b77ba2ffc4dce0e973",
"splash/img/dark-4x.png": "85e59aaff8328cb4b547f8d3bf97355b",
"splash/img/light-3x.png": "b1cbeba0d4090f1991fcd3c2e357d23d",
"splash/img/dark-3x.png": "b1cbeba0d4090f1991fcd3c2e357d23d",
"splash/img/light-4x.png": "85e59aaff8328cb4b547f8d3bf97355b",
"splash/img/dark-2x.png": "232e0d4a14c697b77ba2ffc4dce0e973",
"splash/img/dark-1x.png": "6deb5354db66a2c7ef4706ccb300004a",
"splash/img/light-1x.png": "6deb5354db66a2c7ef4706ccb300004a",
"splash/splash.js": "123c400b58bea74c1305ca3ac966748d",
"splash/style.css": "8632f66b778ab6afb1cdff5a5d50857a",
"index.html": "d2a2a120bab621650dba6c42af4e9fc4",
"/": "d2a2a120bab621650dba6c42af4e9fc4",
"main.dart.js": "a9fbe60a8005a763d4c3b82dacc948b2",
"flutter.js": "f85e6fb278b0fd20c349186fb46ae36d",
"manifest.json": "cd876dbd4b039ac389d028a21787446b",
"assets/AssetManifest.json": "5b8a502657b78b8436c6dd47e1c00cfe",
"assets/NOTICES": "2e6a105a021d3ea55f30e33653995231",
"assets/FontManifest.json": "dc3d03800ccca4601324923c0b1d6d57",
"assets/packages/cupertino_icons/assets/CupertinoIcons.ttf": "6d342eb68f170c97609e9da345464e5e",
"assets/shaders/ink_sparkle.frag": "666358d2a41dda31709e270e2231aa56",
"assets/lib/assets/arm5.jpeg": "5119e96249caf332f52ab6b18c0141b7",
"assets/lib/assets/heel5.jpeg": "de8010020cc0332bdd1917cfda6ca95c",
"assets/lib/assets/scarf4.jpeg": "9735bb0258547f9c89b099e4fea0b59c",
"assets/lib/assets/post2.jpeg": "ca69cb32e20d6b21ff61d3f86f2c175b",
"assets/lib/assets/squer3.jpeg": "0d8dc64fa6caeeafb68b0261fc105a9d",
"assets/lib/assets/squer2.jpeg": "52d83b2f4bef1ac5b6eb7bc8c5a85fe7",
"assets/lib/assets/post3.jpeg": "e8b2b6575128dadea9a8b8af74afdb65",
"assets/lib/assets/download.png": "291242aa763edff2785974d58f7d9582",
"assets/lib/assets/scarf5.jpeg": "5d236d43fef9a73caec6a00e9d2b7ab0",
"assets/lib/assets/heel4.jpeg": "c38c4c2bdb82cd21cfe848e6904d640b",
"assets/lib/assets/arm4.jpeg": "b81d29f8a4fe36a6320732e26cf4ecfc",
"assets/lib/assets/heel3.jpeg": "59cd979d7c2a2f820c11f443f24aedef",
"assets/lib/assets/scarf2.jpeg": "14d90e9bf28aa22623111e790ad1eb4a",
"assets/lib/assets/post4.jpeg": "9a7e428ac2b4654a14c7d1eb44a9cd10",
"assets/lib/assets/16367-madre-embarazada.json": "3fc1b2a4c65001447c27720659ea8374",
"assets/lib/assets/squer5.jpeg": "b7cc825ef2200da9a9c9303ecfe47aee",
"assets/lib/assets/arm3.jpeg": "b8e4ac8373fb789189a56e22490cae8f",
"assets/lib/assets/smaller90.jpeg": "44957918d546eb0507e2ad8ca94ea2ae",
"assets/lib/assets/arm2.jpeg": "7391bf7c24fc91d0ad49c87acb7bd46d",
"assets/lib/assets/squer4.jpeg": "d264d574222002dfad99fc0c66e97e6b",
"assets/lib/assets/180.jpeg": "19a6c0af545369232b4723010af17fb2",
"assets/lib/assets/post5.jpeg": "a3755cca028b7527c6e165c1378fb3fb",
"assets/lib/assets/scarf3.jpeg": "a2e944eabaaab6fa05f8f6703727894b",
"assets/lib/assets/heel2.jpeg": "5e1bc7338ced4e379225b7b2dc589ae7",
"assets/lib/assets/heel1.jpeg": "15359d82c5d977364c38602ee067d4ee",
"assets/lib/assets/140.jpeg": "af1bc1b26fa92404b04c76a5bcda99d0",
"assets/lib/assets/160.jpeg": "9ec4267048cc30684e16b2366ca80d82",
"assets/lib/assets/arm1.jpeg": "20092f7a0b77442464512fde378cf6b4",
"assets/lib/assets/wave.json": "a4f80189961c29c1d099fc16fca62fd9",
"assets/lib/assets/120.jpeg": "b01c54a50977305d8eb98275da482696",
"assets/lib/assets/100.jpeg": "e4dc298a0798f83cd765ad7252bce28c",
"assets/lib/assets/scarf1.jpeg": "00db10534f014f58339cbf03457dc579",
"assets/lib/assets/squer6.jpeg": "16a979276aff46c7e7f59d9ebf1c225f",
"assets/lib/assets/90.jpeg": "bb952b58dfc8cf5f6de20093a3653712",
"assets/lib/assets/squer1.jpeg": "b4939567469df24f35f7b66516b764fb",
"assets/lib/assets/scarf6.jpeg": "07655e79b52671d6fd1cb32e7842edea",
"assets/lib/assets/minstery.jpeg": "75fc6ff16cf8928b548bda167126134d",
"assets/lib/assets/heel6.jpeg": "6374c65e21a2cbe87c9f43d0d8a8bd63",
"assets/lib/assets/post1.jpeg": "b4acb85f499e72f9ac061b07d513997a",
"assets/lib/assets/white.png": "f70a8a6a4e0b36fc6760efc3cfe1e6ef",
"assets/fonts/MaterialIcons-Regular.otf": "95db9098c58fd6db106f1116bae85a0b",
"canvaskit/canvaskit.js": "2bc454a691c631b07a9307ac4ca47797",
"canvaskit/profiling/canvaskit.js": "38164e5a72bdad0faa4ce740c9b8e564",
"canvaskit/profiling/canvaskit.wasm": "95a45378b69e77af5ed2bc72b2209b94",
"canvaskit/canvaskit.wasm": "bf50631470eb967688cca13ee181af62"
};

// The application shell files that are downloaded before a service worker can
// start.
const CORE = [
  "main.dart.js",
"index.html",
"assets/AssetManifest.json",
"assets/FontManifest.json"];
// During install, the TEMP cache is populated with the application shell files.
self.addEventListener("install", (event) => {
  self.skipWaiting();
  return event.waitUntil(
    caches.open(TEMP).then((cache) => {
      return cache.addAll(
        CORE.map((value) => new Request(value, {'cache': 'reload'})));
    })
  );
});

// During activate, the cache is populated with the temp files downloaded in
// install. If this service worker is upgrading from one with a saved
// MANIFEST, then use this to retain unchanged resource files.
self.addEventListener("activate", function(event) {
  return event.waitUntil(async function() {
    try {
      var contentCache = await caches.open(CACHE_NAME);
      var tempCache = await caches.open(TEMP);
      var manifestCache = await caches.open(MANIFEST);
      var manifest = await manifestCache.match('manifest');
      // When there is no prior manifest, clear the entire cache.
      if (!manifest) {
        await caches.delete(CACHE_NAME);
        contentCache = await caches.open(CACHE_NAME);
        for (var request of await tempCache.keys()) {
          var response = await tempCache.match(request);
          await contentCache.put(request, response);
        }
        await caches.delete(TEMP);
        // Save the manifest to make future upgrades efficient.
        await manifestCache.put('manifest', new Response(JSON.stringify(RESOURCES)));
        return;
      }
      var oldManifest = await manifest.json();
      var origin = self.location.origin;
      for (var request of await contentCache.keys()) {
        var key = request.url.substring(origin.length + 1);
        if (key == "") {
          key = "/";
        }
        // If a resource from the old manifest is not in the new cache, or if
        // the MD5 sum has changed, delete it. Otherwise the resource is left
        // in the cache and can be reused by the new service worker.
        if (!RESOURCES[key] || RESOURCES[key] != oldManifest[key]) {
          await contentCache.delete(request);
        }
      }
      // Populate the cache with the app shell TEMP files, potentially overwriting
      // cache files preserved above.
      for (var request of await tempCache.keys()) {
        var response = await tempCache.match(request);
        await contentCache.put(request, response);
      }
      await caches.delete(TEMP);
      // Save the manifest to make future upgrades efficient.
      await manifestCache.put('manifest', new Response(JSON.stringify(RESOURCES)));
      return;
    } catch (err) {
      // On an unhandled exception the state of the cache cannot be guaranteed.
      console.error('Failed to upgrade service worker: ' + err);
      await caches.delete(CACHE_NAME);
      await caches.delete(TEMP);
      await caches.delete(MANIFEST);
    }
  }());
});

// The fetch handler redirects requests for RESOURCE files to the service
// worker cache.
self.addEventListener("fetch", (event) => {
  if (event.request.method !== 'GET') {
    return;
  }
  var origin = self.location.origin;
  var key = event.request.url.substring(origin.length + 1);
  // Redirect URLs to the index.html
  if (key.indexOf('?v=') != -1) {
    key = key.split('?v=')[0];
  }
  if (event.request.url == origin || event.request.url.startsWith(origin + '/#') || key == '') {
    key = '/';
  }
  // If the URL is not the RESOURCE list then return to signal that the
  // browser should take over.
  if (!RESOURCES[key]) {
    return;
  }
  // If the URL is the index.html, perform an online-first request.
  if (key == '/') {
    return onlineFirst(event);
  }
  event.respondWith(caches.open(CACHE_NAME)
    .then((cache) =>  {
      return cache.match(event.request).then((response) => {
        // Either respond with the cached resource, or perform a fetch and
        // lazily populate the cache only if the resource was successfully fetched.
        return response || fetch(event.request).then((response) => {
          if (response && Boolean(response.ok)) {
            cache.put(event.request, response.clone());
          }
          return response;
        });
      })
    })
  );
});

self.addEventListener('message', (event) => {
  // SkipWaiting can be used to immediately activate a waiting service worker.
  // This will also require a page refresh triggered by the main worker.
  if (event.data === 'skipWaiting') {
    self.skipWaiting();
    return;
  }
  if (event.data === 'downloadOffline') {
    downloadOffline();
    return;
  }
});

// Download offline will check the RESOURCES for all files not in the cache
// and populate them.
async function downloadOffline() {
  var resources = [];
  var contentCache = await caches.open(CACHE_NAME);
  var currentContent = {};
  for (var request of await contentCache.keys()) {
    var key = request.url.substring(origin.length + 1);
    if (key == "") {
      key = "/";
    }
    currentContent[key] = true;
  }
  for (var resourceKey of Object.keys(RESOURCES)) {
    if (!currentContent[resourceKey]) {
      resources.push(resourceKey);
    }
  }
  return contentCache.addAll(resources);
}

// Attempt to download the resource online before falling back to
// the offline cache.
function onlineFirst(event) {
  return event.respondWith(
    fetch(event.request).then((response) => {
      return caches.open(CACHE_NAME).then((cache) => {
        cache.put(event.request, response.clone());
        return response;
      });
    }).catch((error) => {
      return caches.open(CACHE_NAME).then((cache) => {
        return cache.match(event.request).then((response) => {
          if (response != null) {
            return response;
          }
          throw error;
        });
      });
    })
  );
}
