---
extends: _layouts.post
section: content
title: The state of data collection in a post GDPR era
date: 2019-01-04
tag: privacy
---

Before the GDPR we were all happy while collecting data about everyone that was visiting our website. Data gathered with tools like Google Analytics, Google Tag Manager, Matomo or Facebook Pixel to name only a few.

However, the arrival of the GDPR made the process harder. Requiring an explicit consent forced companies to be creative. A trend that started was to create a blocking cookie banner to force a user to make a choice. 

In most case, you had 2 choices, accepting everything by default or configuring your experience and potentially opt-out of the tracking. For a lot of these websites that were using a cookie banner, the configuring part is really complex to force the user to get confused and accept everything.

At my current company, we are designing websites for bug retailer to convert people into customers. But clients care a lot about actual data. This means that we have to gather data on as many people as we can. Which led us to implement blocking banners for all websites that we are doing.

We started to us Matomo in addition to Google Analytics. Matomo is configured to be fully GDPR compliant, thus can track users before they give their consent to the use of tracking cookies.

# What does the data say?

Let's look at 2 very distinct websites we created.

The first one is a 3 months campaign where the content was updated weekly. The website was part of a cross-media campaign, we had social media ads, radio spots, and a website.

These are the numbers for the whole campaign:

104 326 visits
- 63% were on mobile
- 25% were on a desktop (or a laptop)
- 70% left the website at the cookie banner

The second website was a cashback campaign with a contest that also lasted 3 months. In order to get a small amount refunded on a product people were asked to visit the website, fill a form, and answer a question to try to win a big price.

This campaign was limited to leaflets in point of sales and to simple advertising through posts on the client social media. The numbers are:

67 503 visits
- 23% were on mobile
- 69% were on a desktop (or a laptop)
- 44% left the website at the cookie banner

When looking at the data we can conclude that a big chunk of visits is lost before reaching the actual content. The first time we saw the numbers we were a bit in shock:

**Between 50 and 70% of the visitors were not even interacting with the cookie banner**.

# What can you do to avoid this?

Well, some people think that all of it can be fixed by tweaking the UI and improving the UX to make it more sneaky and "*force*" users to consent. But is that even a solution to consider? 

A blocking cookie banner is a bad solution to a real problem. The problem being collecting user data while respecting the GDPR. That is the issue we should address. Wouldn't it be better to think privacy first instead of data first?

There are legitimate reasons for analyzing your users. Thanks to the numbers you can make decisions to improve your product. But don't Google Analytics, Facebook Pixel or similar services where you don't know what happens with all that data.

You should consider using other means to track people, like Matomo (which can be GDPR compliant). Yes, the data collected might be less precise in some cases but ask yourself this, what is more important, 100% accurate data for 30% of users or 85% accurate data for 100% of users?

# Possible alternative to Google Analytics

## Matomo

[Matomo](https://matomo.org/) is an open source solution that you can host on your own server for free. And it is what I'm using to collect data on you while you are browsing my website.

The benefit on hosting it yourself is that the data belong to you. You know where it is and what you are doing with it.

It can be configured to respect the DNT header, be fully GDPR compliant and not to use any cookies.

[https://matomo.org/why-matomo/](https://matomo.org/why-matomo/) is a great read.

## Fathom

[Fathom](https://usefathom.com/) is also open source and also allow you to host it on your own server. The main complain I have with Fathom is that it force you to use cookies.

They have a great article about there view on data collection in the EU: [https://usefathom.com/data/](https://usefathom.com/data/).

# Simple Analytics

[Simple Analytics](https://simpleanalytics.io/) isn't open source and isn't free. Making it a bit less attractive than the other two solutions. However, they are very transparent about [what they collect](https://simpleanalytics.io/what-we-collect) and [how they don't track people](https://simpleanalytics.io/no-tracking).

They also have a great article on [why privacy first product makes a lot of business](https://blog.simpleanalytics.io/why-privacy-first-products-will-make-business-sense) sense that I encourage you to read.

# Closing note

As we saw, a blocking cookie banner isn't the answer to data collection. Good alternative exists like the usage of privacy friendly services. 

Let's not forget that we are living in an era where people are more and more concern about their privacy (using VPN's, blocking tracking scripts, etc...). Which means that even if you manage track them, you are not ensured that the data is correct.

I believe that if we all make some changes in our ways Internet would be a much better (and pleasant) place to spent time.
