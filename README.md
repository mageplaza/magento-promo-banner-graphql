# Magento Promo Banner GraphQL

**Magento 2 Promo Banner GraphQL is now a part of the Mageplaza promo Banner extension that adds GraphQL features. This supports PWA Studio.** 

[Mageplaza Promo Banner for Magento 2](https://www.mageplaza.com/magento-2-promo-banner/) is an effective tool to make your announcements about specific events or campaigns more noticeably and attractively. Your customers will be well-informed about any updates on your stores as the promo banners increase the visibility of the announcements rather than text only. 

The extension provides you with 6 styles of promotion banners that allow you to flexibly change the styles of your promo banners without having to design your own. Six types of promo banners the extension offers you are slider, popup, floating, and banned as HTML text or CMS block. You can also easily modify the dimensions of your promo banners to make them more responsive and SEO-friendly on your website. 

Normally, if you manually activate the promo banners to appear and do their work on your website, it’ll be time-consuming and not optimal at all. On the other hand, you have to remember the exact time to launch the promo banners as well as the time to end them, which can reduce the effectiveness and frequency of your promo banners’ performance. That’s why Mageplaza Promo Banner helps you configure the promo banner schedule right from the admin backend. You can freely set the start and end date of each promo banner, then they will be automatically triggered and activated at the right moment you’ve set. 

In some specific cases, such as a free shipping program or product discount, you will want to display a certain banner specially tailored to that campaign. This can be done easily with the Mageplaza Promo Banner extension by setting conditions based on product attributes to activate promo banners. For example, a free shipping program is open with the customers who buy over $500. So when a customers’ order value reaches $500, the free shipping promo banner will appear and he can click on the banner and apply the offering right away. 

Another good point is that you can place the promo banners anywhere you want. You can choose from the suggested positions like top/bottom of the page, or below the cart-to-cart button. Or another way is using Widget or Snippet code to insert promo banners in any places on your website as long as it’s easy to see and catch your customers’ attention.


## 1. How to install

Run the following command in Magento 2 root folder:

```
composer require mageplaza/module-promo-banner-graphql
php bin/magento setup:upgrade
php bin/magento setup:static-content:deploy
```

**Note:**
Promo Banner GraphQL requires installing [Mageplaza Promo Banner](https://www.mageplaza.com/magento-2-promo-banner/) in your Magento installation.

## 2. How to use

To perform GraphQL queries in Magento, please do the following requirements:

- Use Magento 2.3.x or higher. Set your site to [developer mode](https://www.mageplaza.com/devdocs/enable-disable-developer-mode-magento-2.html).
- Set GraphQL endpoint as `http://<magento2-server>/graphql` in url box, click **Set endpoint**.
  (e.g. `http://dev.site.com/graphql`)
- To view the queries that the **Mageplaza Promo Banner GraphQL** extension supports, you can look in `Docs > Query` in the right corner.

## 3. Devdocs

- [Rest API & examples](https://documenter.getpostman.com/view/10589000/TVt1A5LK)
- [GraphQL & examples](https://documenter.getpostman.com/view/10589000/TVt1A5Qb)

## 4. Contribute to this module

Feel free to **Fork** and contribute to this module and create a pull request so we will merge your changes main branch.

## 5. Get Support

- Feel free to [contact us](https://www.mageplaza.com/contact.html) if you have any further questions.
- If you like this project, please give us a **Star** ![star](https://i.imgur.com/S8e0ctO.png)
