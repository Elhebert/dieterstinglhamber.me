'use strict'

const cacheVersion = '0.1.0'
const currentCache = {
  offline: `offline-cache-${cacheVersion}`,
}

self.addEventListener('install', event => {
  event.waitUntil(
    caches
      .open(currentCache.offline)
      .then(cache => {
        return cache.addAll([
          '/',
          '/404.html',
          '/offline',
          '/webmanifest/site.webmanifest',
          '/webmanifest/favicon-16x16.png',
          '/webmanifest/favicon-32x32.png',
          '/blog',
          '/blog/we-are-all-stupid-thus-nobody-is',
          '/blog/i-attempted-to-run-a-marathon',
          '/blog/remove-the-xsrf-cookie-programmatically-in-laravel-5-7',
          '/blog/gdpr-consent-and-cookies-are-sitting-in-a-tree',
          '/blog/taking-the-donottrack-header-into-account',
          '/blog/gdpr-compliant-tracking',
          '/blog/join-the-light-side-we-have-no-cookies',
          '/blog/the-good-the-bad-and-the-ugly-of-seeding-data-in-production',
          '/blog/a-year-at-altavia-act',
          '/blog/what-is-this',
          '/blog/from-2017-to-2018',
          '/blog/invest-in-you',
          '/assets/build/css/main.css',
          '/assets/build/css/hljs.css',
          '/assets/build/css/fonts.css',
          '/assets/build/fonts/firasans-italic.woff2',
          '/assets/build/fonts/firasans-bold.woff2',
          '/assets/build/fonts/firasans-semibold.woff2',
          '/assets/build/fonts/firasans-regular.woff2',
          '/assets/build/fonts/montserrat-regular.woff2',
        ])
      })
      .then(() => {
        return self.skipWaiting()
      })
  )
})

self.addEventListener('fetch', event => {
  if (event.request.method !== 'GET') {
    return
  }

  if (
    event.request.mode === 'navigate' ||
    event.request.headers.get('accept').includes('text/html')
  ) {
    event.respondWith(
      fetch(event.request.url)
        .then(response => {
          return response.redirected
            ? Response.redirect(response.url)
            : response
        })
        .catch(() => {
          return caches.match(event.request).then(response => {
            return response || fetch(event.request, { cache: 'force-cache' }).catch(() => {
              return caches.match('/offline')
            })
          })
        })
    )
  } else {
    event.respondWith(
      caches.match(event.request).then(response => {
        return response || fetch(event.request, { cache: 'force-cache' })
      })
    )
  }
})

// Cache clean up
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames
          .filter(cacheName => {
            return cacheName !== currentCache.offline
          })
          .map(cacheName => {
            return caches.delete(cacheName)
          })
      )
    })
  )
})
