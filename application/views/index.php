<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <!-- <script>
         if (location.href.indexOf("#!") > -1) 
           location.assign(location.href.replace(/\/?#!/, ""));      
       </script>
      <base href="<?php echo base_url('/') ?>" > -->
      <title>Waljon</title>
      <meta name="description" content="Shop powered by PrestaShop">
      <meta name="keywords" content="">
      <link rel="alternate" href="?SubmitCurrency=1&amp;id_currency=2" hreflang="en-us">
      <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

      <link rel="alternate" href="http://demo.posthemes.com/pos_ecolife_cosmetic/cosmetic3/fr/?SubmitCurrency=1&amp;id_currency=2" hreflang="fr-fr">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.min.js"></script>
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/slick-lightbox/0.2.12/slick-lightbox.js"></script>
      <script src="<?php echo base_url('assets/js/easyzoom.js');?>"></script>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" type="text/css" media="all">

      <link rel="stylesheet" href="<?php echo base_url('assets/css/style2.css');?>" type="text/css" media="all">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/angular-toastr.css" />
      <script type="text/javascript">
        var Base_url = "<?=base_url()?>index.php/";   
     </script>

     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular.min.js"></script>      
     <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.22/angular-ui-router.min.js"></script>
     <script src="<?=base_url()?>assets/js/angular-toastr.tpls.js"></script>
     <script src="<?php echo base_url('assets/js/app.js');?>"></script>
     
      <script type="text/javascript">
         var id_lang = 1;
         var poscompare = {"nbProducts":0};
         var possearch_image = 1;
         var possearch_number = 10;
         var prestashop = {"cart":{"products":[],"totals":{"total":{"type":"total","label":"Total","amount":0,"value":"\u20ac0.00"},"total_including_tax":{"type":"total","label":"Total (tax incl.)","amount":0,"value":"\u20ac0.00"},"total_excluding_tax":{"type":"total","label":"Total (tax excl.)","amount":0,"value":"\u20ac0.00"}},"subtotals":{"products":{"type":"products","label":"Subtotal","amount":0,"value":"\u20ac0.00"},"discounts":null,"shipping":{"type":"shipping","label":"Shipping","amount":0,"value":"Free"},"tax":{"type":"tax","label":"Taxes","amount":0,"value":"\u20ac0.00"}},"products_count":0,"summary_string":"0 items","vouchers":{"allowed":0,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"Euro","iso_code":"EUR","iso_code_num":"978","sign":"\u20ac"},"customer":{"lastname":null,"firstname":null,"email":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"is_logged":false,"gender":{"type":null,"name":null},"addresses":[]},"language":{"name":"English (English)","iso_code":"en","locale":"en-US","language_code":"en-us","is_rtl":"0","date_format_lite":"m\/d\/Y","date_format_full":"m\/d\/Y H:i:s","id":1},"page":{"title":"","canonical":null,"meta":{"title":"Ecolife  Responsive Prestashop Theme","description":"Shop powered by PrestaShop","keywords":"","robots":"index"},"page_name":"index","body_classes":{"lang-en":true,"lang-rtl":false,"country-US":true,"currency-EUR":true,"layout-full-width":true,"page-index":true,"tax-display-disabled":true},"admin_notifications":[]},"shop":{"name":"Ecolife  Responsive Prestashop Theme","logo":"\/pos_ecolife_cosmetic\/cosmetic3\/img\/ecolifecosmetic3-logo-15864123973.jpg","stores_icon":"\/pos_ecolife_cosmetic\/cosmetic3\/img\/logo_stores.png","favicon":"\/pos_ecolife_cosmetic\/cosmetic3\/img\/favicon.ico"},"urls":{"base_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/","current_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/?SubmitCurrency=1&id_currency=2","shop_domain_url":"http:\/\/demo.posthemes.com","img_ps_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/","img_cat_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/c\/","img_lang_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/l\/","img_prod_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/p\/","img_manu_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/m\/","img_sup_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/su\/","img_ship_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/s\/","img_store_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/st\/","img_col_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/co\/","img_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/themes\/theme_ecolife_cosmetic3\/assets\/img\/","css_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/themes\/theme_ecolife_cosmetic3\/assets\/css\/","js_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/themes\/theme_ecolife_cosmetic3\/assets\/js\/","pic_url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/upload\/","pages":{"address":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/address","addresses":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/addresses","authentication":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/login","cart":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/cart","category":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/index.php?controller=category","cms":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/index.php?controller=cms","contact":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/contact-us","discount":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/discount","guest_tracking":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/guest-tracking","history":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/order-history","identity":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/identity","index":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/","my_account":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/my-account","order_confirmation":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/order-confirmation","order_detail":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/index.php?controller=order-detail","order_follow":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/order-follow","order":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/order","order_return":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/index.php?controller=order-return","order_slip":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/credit-slip","pagenotfound":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/page-not-found","password":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/password-recovery","pdf_invoice":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/index.php?controller=pdf-invoice","pdf_order_return":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/index.php?controller=pdf-order-return","pdf_order_slip":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/index.php?controller=pdf-order-slip","prices_drop":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/prices-drop","product":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/index.php?controller=product","search":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/search","sitemap":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/sitemap","stores":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/stores","supplier":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/supplier","register":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/login?create_account=1","order_login":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/order?login=1"},"alternative_langs":{"en-us":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/?SubmitCurrency=1&id_currency=2","fr-fr":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/fr\/?SubmitCurrency=1&id_currency=2"},"theme_assets":"\/pos_ecolife_cosmetic\/cosmetic3\/themes\/theme_ecolife_cosmetic3\/assets\/","actions":{"logout":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/?mylogout="},"no_picture_image":{"bySize":{"small_default":{"url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/p\/en-default-small_default.jpg","width":98,"height":98},"cart_default":{"url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/p\/en-default-cart_default.jpg","width":125,"height":125},"home_default":{"url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/p\/en-default-home_default.jpg","width":360,"height":360},"medium_default":{"url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/p\/en-default-medium_default.jpg","width":452,"height":452},"large_default":{"url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/p\/en-default-large_default.jpg","width":800,"height":800}},"small":{"url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/p\/en-default-small_default.jpg","width":98,"height":98},"medium":{"url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/p\/en-default-home_default.jpg","width":360,"height":360},"large":{"url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/img\/p\/en-default-large_default.jpg","width":800,"height":800},"legend":""}},"configuration":{"display_taxes_label":false,"display_prices_tax_incl":false,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"Discount"},"voucher_enabled":0,"return_enabled":0},"field_required":[],"breadcrumb":{"links":[{"title":"Home","url":"http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/en\/"}],"count":1},"link":{"protocol_link":"http:\/\/","protocol_content":"http:\/\/"},"time":1597127155,"static_token":"203b2fb46b107eabda9dd64ae8ebc173","token":"313ba2fb726cb7a4e7cc5a3e5c1a2c9a"};
         var xip_base_dir = "http:\/\/demo.posthemes.com\/pos_ecolife_cosmetic\/cosmetic3\/";
      </script>
      <style type="text/css">
         .animation1 {
         -webkit-transition-duration: 500ms !important;
         -moz-transition-duration: 500ms !important;
         -o-transition-duration: 500ms !important;
         transition-duration: 500ms !important;
         }
      </style>
   </head>
   <body ng-app="App" itemscope itemtype="http://schema.org/WebPage" id="index"  class="lang-en country-us currency-eur layout-full-width page-index tax-display-disabled">
      <main>         
         <ui-view></ui-view>   
      </main>
      
      
      <div id="poscompare-notification" class="">
         <div class="notification-inner">
            <span class="notification-title"><i class="fa fa-check" aria-hidden="true"></i>  Product added to compare.</span>
         </div>
      </div>
   </body>
</html>