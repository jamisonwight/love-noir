<?php 
/** Template Name: Legal */

get_header();

// *** Legal template variables ***
// Brand Information
$brand_name = 'Love Noir Wine';
$brand_URL = 'lovenoirwine.com';

// Legal Template Information
$updated_date = 'May 1, 2025';
$privacy_page_title = 'privacy-policy';
$terms_page_title = 'terms-of-service';
$ccpa_request_title = 'ccpa-request';
$ccpa_request_shortcode = '[contact-form-7 id="ffda7d9" title="CCPA Request"]';
$page_slug = get_post_field('post_name', get_post());

// Legal template container classes
$lg_classes = 'legal privacy grid-x content-page';
$lg_wrap_classes = 'legal-wrap inner-grid-small';
$lg_copyWrap_classes = 'legal-copy-wrap content inner-conent row content-container'; 

// Love Noir Wine brand-specific styles
$font_family = '"minion-pro", serif';
$font_family_headings = '"pt-sans-pro", sans-serif';
$font_size = '1.313em';
$letter_spacing = '.82px';
$line_height = '1.6';
$font_weight = '400';
$border_color = '#fceee3'; // Light tan color
$text_color = '#fceee3'; // light tan text color
$alt_text_color = '#d6ab75'; // Gold accent color
?>

<style>
/* Global legal styles */
.legal {
  padding: 40px 30px;

  ul:not(table ul) {
    margin-left: 40px !important;
  }
  p {
    margin-bottom: 20px !important;
  }
  li {
    margin-bottom: 10px !important;
  }
  .legal-copy-wrap {
    p, ul li, tr, td, label {
        font-weight: <?php echo $font_weight; ?> !important;
        font-family: <?php echo $font_family; ?> !important;
        font-size: <?php echo $font_size; ?> !important;
        line-height: <?php echo $line_height; ?> !important;
        border-color: <?php echo $border_color; ?>;
    } 
  }
  h2, h3 {
    margin: 40px 0 10px !important;
  }
  a, table a, ul a {
    color: <?php echo $alt_text_color; ?> !important;
  }
}

/* Form styles */
.ccpa-request-form {
  h3 {
    margin-bottom: 10px;
  }
}
.legal .wpcf7 form p {
    margin-top: 0 !important;
}
.request-delete {
  display: grid;
  p {
    margin-bottom: 0 !important;
  }
}
span[data-name="req-type"] {
  .wpcf7-form-control {
    display: flex;
    flex-direction: column;
  }
}
[data-class="wpcf7cf_group"] {
  width: 100% !important;
}
.wpcf7-form-control-wrap[data-name="req-del-type"] {
  margin-left: 10px;

  .wpcf7-list-item-label, 
  .wpcf7-list-item-label {
    font-size: <?php echo $font_size; ?>;
    font-family: <?php echo $font_family; ?>;
    font-weight: 500;
    font-style: normal;
    line-height: 1.8;
    letter-spacing: initial !important;
    text-transform: initial;
  }
}

/* Base table styles with higher specificity */
.legal .table-responsive {
    width: 100%;
    margin-bottom: 1rem;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;

    table {
        border-color: <?php echo $border_color; ?> !important;
        border: none;
    }

    thead, tbody, tfoot {
      border: 1px solid <?php echo $border_color; ?> !important;
      background-color: transparent;
    }

    tbody tr:nth-child(even) {
      background-color: inherit !important;
    }

    td {
    }

    th strong {
        padding: 5px;
        display: block;
    }
}

@media screen and (max-width: 768px) {
    /* Hide table headers on mobile with !important */
    .table-responsive .table-titles td,
    .table-responsive thead {
        display: none !important;
    }

    /* Force table elements to behave as blocks with !important */
    .table-responsive table,
    .table-responsive tbody,
    .table-responsive th,
    .table-responsive td,
    .table-responsive tr {
        display: block !important;
        width: 100% !important;
    }

    /* Table row styling */
    .table-responsive tr {
        background: inherit !important;
    }

    /* Cell styling with high specificity */
    .table-responsive td {
        position: relative !important;
        padding: 12px 10px 12px 50% !important;
        min-height: 45px !important;
        text-align: left !important;
        box-sizing: border-box !important;
    }

    /* Label styling with high specificity */
    .table-responsive td:before {
        content: attr(data-label) !important;
        position: absolute !important;
        left: 12px !important;
        top: 12px !important;
        width: 45% !important;
        padding-right: 10px !important;
        white-space: normal !important;
        font-weight: bold !important;
        text-align: left !important;
    }

    /* Remove bottom border from last cell */
    /* .table-responsive td:last-child {
        border-bottom: none !important;
    } */

    /* Add spacing between tables */
    .table-responsive {
        margin-bottom: 2rem !important;
    }

    /* Fix any potential float issues */
    .table-responsive:after {
        content: "";
        display: table;
        clear: both;
    }
}
</style>

<div class="<?php echo ($lg_classes) ? $lg_classes : 'legal' ; ?>">
  <div class="<?php echo ($lg_wrap_classes) ? $lg_wrap_classes : 'legal-wrap'; ?>">
    <div class="<?php echo ($lg_copyWrap_classes) ? $lg_copyWrap_classes : 'legal-copy'; ?>">

    <?php if ($page_slug == $privacy_page_title) : ?>
            <!-- ************** -->
            <!-- PRIVACY POLICY -->
            <!-- ************** -->
            <h1 style="margin-bottom: 50px;">Privacy Policy</h1>
            <p><small>Last Updated: <?php echo $updated_date; ?></small></p>

            <p>The Wine Group LLC, doing business as <?php echo $brand_name; ?>, wants you to be familiar with how we collect, use, share and disclose personal information as defined under applicable privacy law (or PII), including any PII legally defined as sensitive personal information (SPII). This Privacy Policy describes our practices in connection with information that we collect (including information you provide) online or off, via our websites (the “Sites”) or any other interaction with TWG, including purchasing our products (together with use of the Sites, the “Services”). TWG is happy to bring you the best beverages in the business. For more information about TWG and our brands, please visit <a href="https://www.thewinegroup.com" target="_blank" rel="noopener">www.thewinegroup.com</a>. </p>
            <p>This Privacy Policy shall be read together with our <a href="/<?php echo $terms_page_title; ?>">Terms of Service</a> and any terms and conditions applicable to your submission of information (including user generated content) to us, such as applicable terms of a social media website through which you submit such content. We may change this Privacy Policy from time to time. Any changes to this Privacy Policy will become effective as indicated in the “Last Updated” line. Your continued use of the Sites or Services following these changes means that you accept the revised Privacy Policy. </p>
            <p><strong>Look below for our notice for California residents and our Annex 1 describing our PII collection and disclosure practices.</strong> </p>
            <p>“<strong>PII</strong>” is information that identifies you as an individual or relates to an identifiable individual. PII we may collect includes: </p>
            <ul>
            <li>Name</li>
            <li>Postal address (including billing and shipping addresses)</li>
            <li>Telephone number</li>
            <li>Email address</li>
            <li>Credit and debit card number and security code</li>
            <li>Account username and password</li>
            <li>Social media identifier</li>
            <li>Birth date</li>
            <li>Purchase history, gender, income</li>
            </ul>

            <h3><strong>Collection of PII</strong></h3>
            <p>We may collect personal information from you, online and offline. Offline, we may receive information from you through telephone, written correspondence, and in person, including at our wineries, tasting rooms, or events. Online, we may receive information through our Sites, affiliated websites, a brand page on social media websites or similar online activities, email, user generated content, and via mobile phone applications or SMS (text message) correspondence. Generally, such information will be collected directly from you, such as through a transaction, inquiry or your submission of a form, registration or communication to us. Information may also be gathered from service providers, such as marketing and fulfillment companies, opt-in lists, and referrals, and through your activities and interactions with us, including, without limitation, your online activity on our Sites and social media pages. We may combine data we collect from these types of sources. Any of your personal information or other information gathered by one of our brands may be shared with and used by any of our other brands in accordance with this Privacy Policy. To see a complete list of what we collect and how we use this data, please see Annex 1 below. </p>

            <h3><strong>Use Of PII</strong></h3>
            <p>We and our service providers may use PII:</p>
            <ul>
            <li>To respond to your inquiries, fulfill your requests, process ongoing memberships and/or fulfill your orders of our products. </li>
            <li>To send information to and communicate with you, including marketing communications that we believe may be of interest. </li>
            <li>To confirm you are of legal drinking age.</li>
            <li>To personalize your experience by presenting products and offers tailored to you by us, our partners, and service providers, and to facilitate social sharing functionality. </li>
            <li>To allow you to participate in sweepstakes, contests, surveys and similar promotions and to administer these activities. Some of these activities may have additional rules containing information about how we use and disclose your PII. Please read those rules carefully. </li>
            <li>For our business purposes, such as data analysis, audits, fraud monitoring and prevention, developing new products, improving or modifying our Services, identifying usage trends, determining the effectiveness of promotional campaigns, and operating and expanding business activities, and similar purposes. </li>
            </ul>

            <h3><strong>Disclosure Of PII</strong></h3>
            <p>Your PII may be disclosed:</p>
            <ul>
            <li>To our affiliates, as defined by applicable privacy law, for the purposes described in this Privacy Policy. </li>
            <li>To our service providers who provide services such as Site hosting, data analysis, payment processing, order fulfillment, information technology and related infrastructure provision, customer service, email delivery, credit card processing, auditing and other similar services. This includes sponsors and fulfillment vendors of sweepstakes, contests, surveys and similar promotions. </li>
            <li>When you share on social media, to your friends associated with your social media account and to the social media account provider. By connecting us to your social media account you authorize us to share information with your social media account provider and you understand that the use of the information we share will be governed by the social media site’s privacy policy. If you do not want your PII shared with other users or with your social media account provider, please do not connect your social media account with your Site account and do not participate in. social sharing on the Sites. </li>
            <li>To third parties in the event of any reorganization, merger, sale, joint venture, assignment, transfer or other disposition of all or any portion of our business, assets or stock (including in connection with any bankruptcy or similar proceedings), as well as our advisors and vendors, including but not limited to financial, legal and technical external advisors.</li> 
            <li>We (including any of our brands) may use your user-generated content you choose submit to us including by displaying it on our Sites and using it for our promotional purposes. </li>
            <li>We may also use and disclose your PII as we believe to be necessary or appropriate: (a) to comply with applicable law and respond to requests from public and government authorities; (b) to enforce our terms and conditions; and (c) to protect and/or defend our rights, privacy, safety or property, and/or that of our affiliates, you, or others. </li>
            <li>If you are a resident of any country other than the United States, we may transfer Personal Information that we collect about you outside of your country, including the United States, for the purposes set out in this Privacy Policy, and including for processing by third-party service providers in connection with those purposes. Our third-party service providers may perform processing activities outside of your country of residence. </li>
            </ul>

            <h3><strong>Online Activity Information</strong></h3>
            <p>“Online Activity Information” means the following which may include PII:</p>
            <ul>
            <li>Device Identifiers</li>
            <li>Cookies</li>
            <li>Beacons</li>
            <li>Pixel tags</li>
            <li>Mobile ad identifiers and similar technology</li>
            <li>Other forms of persistent or probabilistic identifiers</li>
            <li>Internet Protocol address</li>
            <li>Browsing and search history</li>
            <li>Other information regarding your interaction with Sites, applications or advertisements</li>
            </ul>

            <h3><strong>Collection and Use Of Online Activity Information</strong></h3>
            <p>We and our service providers may collect and use Online Activity Information:</p>
            <ul>
            <li><strong>Through Your Browser Or Device:</strong> Certain information is collected by most browsers or automatically through your device, such as your Media Access Control (MAC) address, computer type (Windows or Macintosh), screen resolution, operating system name and version, device manufacturer and model, language, Internet browser type and version and the name and version of the Sites you are using. We use this information to help ensure that the Sites function properly. </li>
            <li><strong>Using Cookies:</strong> Cookies are pieces of information stored directly on the device that you are using. Cookies allow us to collect information such as browser type, time spent on the Sites, pages visited, language preferences, and other anonymous traffic data. We and our service providers use the information for security purposes, to facilitate navigation, display information more effectively, and to personalize your experience while using the Sites, as well as for online tracking purposes. We can recognize your computer to enhance your use of the Sites. We also gather statistical information about the usage of the Sites in order to periodically improve the design and functionality, understand how the Sites are used and to assist us with resolving questions regarding the Sites. Cookies further allow us to select which of our advertisements or offers are most likely to appeal to you and display them while you are on the Sites. We may also use cookies in online advertising to track responses to our advertisements and we may use cookies or other files to track your use of other Sites. If you do not want information collected through the use of cookies, there is a simple procedure in most browsers that allows you to automatically decline cookies, or be given the choice of declining or accepting the transfer to your computer of a particular cookie (or cookies) from a particular site. You may also wish to refer to <a href="http://www.allaboutcookies.org/manage-cookies/index.html" target="_blank" rel="noopener">http://www.allaboutcookies.org/manage-cookies/index.html</a>. However, if you do not accept these cookies, you may experience some inconvenience in your use of the Sites. For example, we may not be able to recognize your computer and you may need to log in every time you visit the Sites. You also may not receive advertising or other offers from us that are relevant to your interests and needs. </li>
            <li><strong>Analytics.</strong> We may use analytics services, which rely on cookies and similar technologies to collect and analyze information about use of the Sites and Services, and report on activities and trends. These services may also collect information regarding the use of other Sites, apps and online resources. </li>
            <li><strong>Using Pixels, Tags And Other Similar Technologies.</strong> Pixels(also known as web beacons and clear GIFs) may be used to, among other things, track the actions of users of the Sites (including email recipients), measure the success of our marketing campaigns and compile statistics about usage of the Sites and response rates. </li>
            <li><strong>Using Adobe Flash Technology (Including Flash Local Shared Objects (“Flash LSOs”)) And Other Similar Technologies:</strong>  We may use Flash LSOs and other technologies to, among other things, collect and store information about your use of the Sites. If you do not want Flash LSOs stored on your computer, you can adjust the settings of your Flash player to block Flash LSO storage using the tools contained in the <a href="https://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager07.html" target="blank" rel="noopener"> Site Storage Settings Panel</a>. You can also control Flash LSOs by going to the <a href="https://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager03.html" target="_blank" rel="noopener">Global Storage Settings Panel</a> and following the instructions (which may include instructions that explain, for example, how to delete existing Flash LSOs (referred to “information” on the Macromedia site), how to prevent Flash LSOs from being placed on your computer without your being asked, and (for Flash Player 8 and later) how to block Flash LSOs that are not being delivered by the operator of the page you are on at the time). Please note that setting the Flash Player to restrict or limit acceptance of Flash LSOs may reduce or impede the functionality of some Flash applications, including, potentially, Flash applications used in connection with the Sites or our online content. </li>
            <li><strong>IP Address:</strong> Your “<strong>IP Address</strong>” is a number that is automatically assigned to the computer that you are using by your Internet Service Provider (ISP). An IP Address may be identified and logged automatically in our server log files whenever a user accesses the Sites, along with the time of the visit and the page(s) that were visited. Collecting IP Addresses is standard practice and is done automatically by many websites, applications and other services. We collect and use IP Addresses for purposes such as calculating usage levels of the Sites, helping diagnose server problems, and administering the Sites. </li>
            </ul>

            <h3><strong>Advertising and Analytics Disclaimers</strong></h3>
            <p>We and/or our service providers, including advertising companies, social networking websites, and service providers acting on our behalf, use cookies, pixels, web beacons, and other similar technology to collect information for the purposes described in this Privacy Policy including advertising, analytics, online behavioral marketing, monitoring performance, and improvement of our online services (traffic, errors, page load time, popular pages, etc.).
            </p>
            <p> We do not conduct behavior remarketing. </p>

            <h3><strong>Google Analytics and Facebook Pixel</strong></h3>
            <p>We use Google Analytics and Facebook Pixel to understand how our website, services, and products perform, how you use them, and to serve you with ads on third-party websites and social networking websites like Facebook. To learn more about how Google processes your data, please visit <a href="https://www.google.com/policies/privacy" target="_blank" rel="noopener">https://www.google.com/policies/privacy</a>.  To opt out of Google Analytics please visit  <a href="https://tools.google.com/dlpage/gaoptout" rel="noopener" target="_blank">https://tools.google.com/dlpage/gaoptout</a>. To learn more about how Facebook uses your data, please visit <a href="https://www.facebook.com/policy.php" rel="noopener" target="_blank">https://www.facebook.com/policy.php</a>. 
            </p>

            <h3><strong>Digital Advertising Alliance</strong></h3>
            <p>You can also opt out from companies like Google, Instagram, Pinterest, Facebook and other participating companies through the Digital Advertising Alliance in the USA:  <a href="http://www.aboutads.info/choices">http://www.aboutads.info/choices</a>. You can also opt out of participating companies from the Digital Advertising Alliance of Canada in Canada: <a href="http://youradchoices.ca/" rel="noopener" target="_blank">http://youradchoices.ca/</a> or opt out using your mobile device settings at http:  <a href="http://www.aboutads.info" rel="noopener" target="_blank">www.aboutads.info</a> choices.
            </p>

            <h3><strong>Retention of Personal Information</strong></h3>
            <p>We will retain your personal information (collected through offline and online methods) for no longer than necessary for the purposes described in this Privacy Policy. We will retain and use your personal information to the extent necessary to comply with our legal obligations, resolve disputes, and enforce our legal agreements and policies. </p>

            <h3><strong>Aggregate Information</strong></h3>
            <p>We may aggregate PII and use the aggregated information to analyze the effectiveness of our Service, to improve and add features to our Service, and for other similar purposes. In addition, from time to time, we may analyze the general behavior and characteristics of users of our Service and share aggregated information like general user statistics with prospective service providers. We may collect aggregated information through the Services, through cookies, and through other means described in this Privacy Policy. </p>
            <p>Once we have aggregated or de-identified PII, we will not reidentify, or attempt to reidentify, that information. Additionally, we will require all service providers who handle that aggregated or de-identified information to not reidentify, or attempt to reidentify, that information. </p>

            <h3><strong>Advertisers</strong></h3>
            <p>We may use advertising companies to serve advertisements regarding goods and services that may be of interest to you when you access and use the Services and other Sites, based on information relating to your access to and use of the Services and other Sites. To do so, these companies may place or recognize a unique cookie on your browser (including through use of pixel tags). If you would like more information about this practice and to learn about your choices in connection with these practices, please visit <a href="http://www.networkadvertising.org/managing/opt_out.asp" target="_blank" rel="noopener">http://www.networkadvertising.org/managing/opt_out.asp</a> and <a href="http://www.aboutads.info">http://www.aboutads.info</a>. </p>

            <h3><strong>Third Party Services</strong></h3>
            <p>This Privacy Policy does not address, and we are not responsible for, the privacy, information or other practices of any third parties, including any third party operating any site, social media platform or service to which the Services link. Please review any third-party privacy policies to learn how they handle your PII. The inclusion of a link on the Services does not imply endorsement of the linked site or service by us or by our affiliates. </p>

            <h3><strong>Security</strong></h3>
            <p>We use reasonable organizational, technical and administrative measures designed to protect PII within our organization. Unfortunately, no data transmission or storage system can be guaranteed to be 100% secure. If you have reason to believe that your interaction with us is no longer secure (for example, if you feel that the security of any account you might have with us has been compromised), please immediately notify us of the problem by contacting us in accordance with the “Contacting Us” section below. </p>

            <h3><strong>Choices And Access</strong></h3>
            <p>If you no longer want to receive marketing-related emails from us on a going-forward basis, you may opt-out of receiving these marketing-related emails by using the opt-out mechanism contained in each such email. </p>
            <p>If you would like to update PII that you have provided to us, you may contact us in accordance with the “Contacting Us” section below. </p>

            <h3><strong>Use Of Services By Minors</strong></h3>
            <p>The Services are not directed to individuals under the age of twenty-one (21). We do not knowingly collect PII from individuals under 21, and we request that individuals under 21 do not use or access the Services and that they do not provide PII through the Services. </p>

            <h3><strong>Jurisdictional Issues</strong></h3>
            <p>The Services are controlled and operated by us from California, United States, and are not intended to subject us to the laws or jurisdiction of any state, country or territory other than that of California, United States. If you are a resident of any country other than the United States, we may transfer Personal Information that we collect about you outside of your country, including the United States, for the purposes set out in this Privacy Policy, and including for processing by third-party service providers in connection with those purposes. Our third-party service providers may perform processing activities outside of your country of residence. </p>

            <h3><strong>Contacting Us</strong></h3>
            <p>If you have any questions about this Privacy Policy, please contact us at <a href="mailto:privacypolicy@thewinegroup.com" target="_blank" rel="noopener">privacypolicy@thewinegroup.com</a> </p>

            <h3><strong>California Consumer Privacy Act (CCPA) Privacy Notice</strong></h3>
            <small>Last Updated: <?php echo $updated_date; ?></small> 
            <p>The Wine Group has prepared this California Consumer Privacy Act (“<strong>CCPA</strong>”) Privacy Notice (the “<strong>Notice</strong>”) to inform California residents of the Personally Identifiable Information (“PII”) that we collect and how we use and disclose that information, and the privacy rights California residents may have relating to their PII and how those rights can be exercised. </p>
            <p>This Notice is incorporated into and forms part of our <a href="#" data-uw-rm-brl="PR" data-uw-original-href="<?php echo $updated_URL; ?>/privacy-policy/#">Privacy Policy</a>. By accessing or using the Sites or our Services, you agree to the practices described in this Notice. If you do not agree to this Notice, please do not access the Sites or otherwise use the Services.</p>

            <h3><strong>PII Collection And Disclosure.</strong></h3>
            <p>The following tables below are intended to provide additional information about our collection and disclosure of PII which we may have collected from you since January 1, 2022. Nothing in this Notice limits our ability to use or disclose information as described in our Privacy Policy. </p>

            <!-- CUSTOMERS AND SITE VISITORS -->
            <div class="table-responsive">
            <table border="1" cellpadding="10" cellspacing="10" style="border-collapse: collapse; margin: 10px 0 40px; width: 100%">
                <tr valign="top">
                    <th colspan="6"><strong>CUSTOMERS AND SITE VISITORS</strong></th>
                </tr>
            <tr valign="top" class="table-titles">
                    <td style="width: 16.66%"><strong>Category</strong></td>
                    <td style="width: 16.66%"><strong>Sources</strong></td>
                    <td style="width: 16.66%"><strong>Purpose</strong></td>
                    <td style="width: 16.66%"><strong>Disclosed To</strong></td>
                    <td style="width: 16.66%"><strong>Sold or Shared</strong></td>
                    <td style="width: 16.66%"><strong>Retention Period</strong></td>
                </tr>
                <!-- Personal Information --> 
                <tr valign="top">
                    <td data-label="Category">
                        <p><strong>Personal Information</strong></p> 
                        <p><u>Examples:</u> full name, postal address, email address, phone number, account name, signature, age, social media handle.</p> </td>
                    <td data-label="Sources">Directly from you when you interact with the Sites or Services<br><br> From social media platforms and similar services. </td>
                    <td data-label="Purpose">
                        <ul>
                        <li>To respond to your inquiries, fulfill your requests, and/or fulfill your orders of our products. </li>
                        <li>To send information to and communicate with you, including marketing communications. </li>
                        <li>To confirm you are of legal drinking age.</li>
                        <li>To personalize your experience by presenting products and offers tailored to you. </li>
                        <li>To allow you to participate in sweepstakes, contests, surveys and similar promotions and to administer these activities. Some of these activities may have additional rules containing information about how we use and disclose your PII. Please read those rules carefully.</li>
                        <li>For our business purposes, such as data analysis, audits, fraud monitoring and prevention, developing new products, improving or modifying our Services, identifying usage trends, determining the effectiveness of promotional campaigns, and operating and expanding business activities, and similar purposes.</li>
                        </ul>
                    </td>
                    <td data-label="Disclosed To">
                        <ul>
                        <li>To our affiliates for the purposes described in this Privacy Policy.</li>
                        <li>To our third-party service providers (e.g., site hosting, data analysis, payment processing).</li>
                        <li>When you share on social media, to your friends associated with your social media account and to the social media account provider. By connecting us to your social media account you authorize us to share information with your social media account provider and you understand that the use of the information we share will be governed by the social media site’s privacy policy. If you do not want your PII shared with other users or with your social media account provider, please do not connect your social media account with your Site account and do not participate in social sharing on the Sites.</li>
                        <li>We may share your personal information with social media platforms such as Facebook and Instagram and with Google Analytics to serve you advertisements on our behalf and to provide analytics services. Depending on your place of residence, the circumstances, and the contractual obligations in place, this sharing may be considered a “sale” or “sharing,” and you may have the right to request that we stop such sharing as set forth in this Privacy Policy. For more information on this type of sharing and how you may opt out, see the “Third Party Advertising and Analytics Disclaimers” section below.</li>
                        <li>To third parties in the event of any reorganization, merger, sale, joint venture, assignment, transfer or other disposition of all or any portion of our business, assets or stock (including in connection with any bankruptcy or similar proceedings), as well as our advisors and third party vendors, including but not limited to financial, legal and technical external advisors.</li>
                        <li>We (including any of our brands) may use your user-generated content you choose submit to us including by displaying it on our Sites and using it for our promotional purposes.</li>
                        <li>We may also use and disclose your PII as we believe to be necessary or appropriate: (a) to comply with applicable law and respond to requests from public and government authorities; (b) to enforce our terms and conditions; and (c) to protect and/or defend our rights, privacy, safety or property, and/or that of our affiliates, you, or others.</li>
                        </ul>
                    </td>
                    <td data-label="Sold or Shared">NO</td>
                    <td data-label="Retention Period">No longer than necessary to fulfill the purposes outlined in this Policy and as otherwise needed to comply with applicable law and internal company policies.</td>
                </tr>
                <!-- Sensitive Information --> 
                <tr valign="top">
                    <td data-label="Category">
                        <p><strong>Sensitive Information</strong></p> 
                        <p><u>Examples:</u> Social Security number (for sweepstakes and contest winners), credit card information for purchases, financial information, demographic information.</p>
                    </td>
                    <td data-label="Sources">Directly from you.</td>
                    <td data-label="Purpose">To provide 1099 tax form for prizes over or process your purchases.</td>
                    <td data-label="Disclosed To">Prize fulfillment service providers for prizes over or process your purchases. </td>
                    <td data-label="Sold or Shared">NO</td>
                    <td data-label="Retention Period">No longer than necessary to fulfill the purposes outlined in this Privacy Policy and as otherwise needed to comply with applicable law and internal company policies.</td>
                </tr>
                <!-- Online Activity Information  --> 
                <tr valign="top">
                    <td data-label="Category"><strong>Online Activity Information</strong> <br><br> <u>Examples:</u> device identifiers, cookies, pixel tags, Internet Protocol address, browsing and search history.</td>
                    <td data-label="Sources">
                        <p>From you directly or via cookies and similar technologies.</p>
                        <p>From service providers and advertising networks collecting such information.</p> 
                    </td>
                    <td data-label="Purpose">For our business purposes, such as marketing, data analysis, audits, fraud monitoring and prevention, developing new products, improving or modifying our Services, identifying usage trends, determining the effectiveness of promotional campaigns, and operating and expanding business activities, and similar purposes. For more information of how we use online activity information see our privacy policy above.</td>
                    <td data-label="Disclosed To">
                        <ul>
                        <li>To our service providers who provide services such as marketing, website hosting, data analysis, information technology and related infrastructure provision, and other similar services.</li>
                        <li>To providers of social media platforms and advertising networks in order for them to target and serve advertisements on our behalf.</li>
                        </ul>
                    </td>
                    <td data-label="Sold or Shared">NO</td>
                    <td data-label="Retention Period">No longer than necessary to fulfill the purposes outlined in this Privacy Policy and as otherwise needed to comply with applicable law and internal company policies.</td>
                </tr>
                <!-- Commercial Information --> 
                <tr valign="top">
                    <td data-label="Category">
                        <p><strong>Commercial Information</strong></p> 
                        <p><u>Examples:</u> records of products purchased, obtained, or considered, and other purchasing histories or tendencies.</p>
                    </td>
                    <td data-label="Sources">
                        <ul>
                        <li>Directly from you.</li>
                        <li>Direct sales and customer service providers.</li>
                        </ul>
                    </td>
                    <td data-label="Purpose">
                        <ul>
                        <li>To respond to your inquiries, fulfill your requests, and complete your purchases.</li>
                        <li>To send marketing communications that we believe may be of interest.</li>
                        <li>To personalize your experience on the Services by presenting products and offers tailored to you.</li>
                        <li>For our business purposes, such as data analysis, audits, fraud monitoring and prevention, developing new products, improving or modifying our Services, identifying usage trends, determining the effectiveness of promotional campaigns, and operating and expanding business activities, and similar purposes.</li>
                        </ul>
                    </td>
                    <td data-label="Disclosed To">To our service providers who provide services such as website hosting, data analysis, payment processing, order fulfillment, information technology and related infrastructure provision, customer service, direct sales, email delivery, credit card processing, auditing and other similar services.</td>
                    <td data-label="Sold or Shared">NO</td>
                    <td data-label="Retention Period">No longer than necessary to fulfill the purposes outlined in this Privacy Policy and as otherwise needed to comply with applicable law and internal company policies.</td>
                </tr>
            </table>
            </div>

            <!-- JOB APPLICANTS -->
            <div class="table-responsive"> 
            <table border="1" cellpadding="10" cellspacing="10" style="border-collapse: collapse; margin: 40px 0; width: 100%">
                <tr valign="top">
                    <th colspan="6"><strong>JOB APPLICANTS</strong></th>
                </tr>
            <tr valign="top" class="table-titles">
                    <td style="width: 16.66%"><strong>Category</strong></td>
                    <td style="width: 16.66%"><strong>Sources</strong></td>
                    <td style="width: 16.66%"><strong>Purpose</strong></td>
                    <td style="width: 16.66%"><strong>Disclosed To</strong></td>
                    <td style="width: 16.66%"><strong>Sold or Shared</strong></td>
                    <td style="width: 16.66%"><strong>Retention Period</strong></td>
                </tr>
                <!-- Identification Information --> 
                <tr valign="top">
                    <td data-label="Category">
                        <p><strong>Identification Information</strong></p>
                        <p><u>Examples:</u> name, postal address, email address, phone number.</p>
                    </td>
                    <td data-label="Sources">
                        <ul>
                        <li>Directly from you.</li>
                        <li>From companies or organizations that we collect personal data to support pre-employment activities</li>
                        </ul>
                    </td>
                    <td data-label="Purpose">To consider and respond to your employment application</td>
                    <td data-label="Disclosed To">
                        <ul>
                        <li>To our service providers for applicant portal and/or database, and pre-employment screening.</li>
                        <li>Tax credit company for special class employment</li>
                        </ul>
                    </td>
                    <td data-label="Sold or Shared">NO</td>
                    <td data-label="Retention Period">No longer than necessary to fulfill the purposes outlined in this Privacy Policy and as otherwise needed to comply with applicable law and internal company policies.</td>
                </tr>
                <!-- Demographic Information --> 
                <tr valign="top">
                    <td data-label="Category">
                        <p><strong>Demographic Information</strong></p>
                        <p><u>Examples:</u> race, age, gender, disability, citizenship status, and military and veteran status.</p>
                    </td>
                    <td data-label="Sources">Directly from you.</td>
                    <td data-label="Purpose">
                        <ul>
                        <li>To consider and respond to your employment application.</li>
                        <li>For compliance with legal obligations.</li>
                        </ul>
                    </td>
                    <td data-label="Disclosed To">
                        <ul>
                        <li>To our service providers for applicant portal and/or database</li>
                        <li>Background check vendor for pre-employment screening.</li>
                        <li>Health clinics for drug and physical testing for pre- employment screening.</li>
                        <li>Tax credit company for special class employment.</li>
                        </ul>
                    </td>
                    <td data-label="Sold or Shared">NO</td>
                    <td data-label="Retention Period">No longer than necessary to fulfill the purposes outlined in this Privacy Policy and as otherwise needed to comply with applicable law and internal company policies.</td>
                </tr>
                <!-- Professional or Employment-Related Information --> 
                <tr valign="top">
                    <td data-label="Category">
                        <p><strong>Professional or Employment-Related Information</strong></p>
                        <p><u>Examples:</u> employment history, qualifications, certifications, references, and any other information you include in your resume or application.</p>
                    </td>
                    <td data-label="Sources">Directly from you.</td>
                    <td data-label="Purpose">To consider and respond to your employment application.</td>
                    <td data-label="Disclosed To">
                        <ul>
                        <li>To our service providers for applicant portal and/or database.</li>
                        <li>Background check vendor for pre-employment screening.</li>
                        <li>Tax credit company for special class employment.</li>
                        </ul>
                    </td>
                    <td data-label="Sold or Shared">NO</td>
                    <td data-label="Retention Period">No longer than necessary to fulfill the purposes outlined in this Privacy Policy and as otherwise needed to comply with applicable law and internal company policies.</td>
                </tr>
                <!-- Education Information --> 
                <tr valign="top">
                    <td data-label="Category">
                        <p><strong>Education Information</strong></p>
                        <p><u>Examples:</u> school(s) attended, degree(s) earned, GPA, activities, and any other information you include in your resume.</p>
                    </td>
                    <td data-label="Sources">Directly from you.</td>
                    <td data-label="Purpose">To consider and respond to your employment application.</td>
                    <td data-label="Disclosed To">
                        <ul>
                        <li>To our service providers for applicant portal and/or database.</li>
                        <li>Background check vendor for pre-employment screening.</li>
                        </ul>
                    </td>
                    <td data-label="Sold or Shared">NO</td>
                    <td data-label="Retention Period">No longer than necessary to fulfill the purposes outlined in this Privacy Policy and as otherwise needed to comply with applicable law and internal company policies.</td>
                </tr>
            </table>
            </div>

            <!-- BUSINESS TO BUSINESS INFORMATION -->
            <div class="table-responsive"> 
            <table border="1" cellpadding="10" cellspacing="10" style="border-collapse: collapse; margin: 40px 0; width: 100%">
                <tr valign="top">
                    <th colspan="6"><strong>BUSINESS TO BUSINESS INFORMATION</strong></th>
                </tr>
            <tr valign="top" class="table-titles">
                    <td style="width: 16.66%"><strong>Category</strong></td>
                    <td style="width: 16.66%"><strong>Sources</strong></td>
                    <td style="width: 16.66%"><strong>Purpose</strong></td>
                    <td style="width: 16.66%"><strong>Disclosed To</strong></td>
                    <td style="width: 16.66%"><strong>Sold or Shared</strong></td>
                    <td style="width: 16.66%"><strong>Retention Period</strong></td>
                </tr>
                <!-- Business-to-Business (“B2B”) Information --> 
                <tr valign="top">
                    <td data-label="Category">
                        <p><strong>Business-to-Business (“B2B”) Information</strong></p>
                        <p><u>Examples:</u> Name, phone number, address, email address and other contact and relationship information consistent with your role in facilitating the business relationship.</p>
                    </td>
                    <td data-label="Sources">You, if you are a contact person for any of our business partners, vendors, distributors, suppliers, service providers, contractors, or other entities with which we have a business relationship or potential business relationship.</td>
                    <td data-label="Purpose">For internal purposes, including to contact you, send and receive information, and otherwise facilitate the business relationship.</td>
                    <td data-label="Disclosed To">We do not disclose B2B Information outside our business relationship without your consent.</td>
                    <td data-label="Sold or Shared">NO</td>
                    <td data-label="Retention Period">No longer than necessary to fulfill the purposes outlined in this Privacy Policy and as otherwise needed to comply with applicable law and internal company policies.</td>
                </tr>
            </table>
            </div>
            <h3><strong>PII Collected From Customers And Site Visitors</strong></h3>
            <p>Additionally, we may disclose each of the above categories of PII for Customers, Site Visitors and Applicants for Employment: </p>
            <ul>
            <li>To third parties in the event of a merger, acquisition, sale or other business combination or divestiture. </li>
            <li>To service providers, such as attorneys, accountants, etc. in order for them to provide services on our behalf. </li>
            <li>To third parties and government entities, including law enforcement, as necessary for our compliance with our legal obligations or to protect our rights or the health and safety of our employees or the public. </li>
            </ul>

            <h3><strong>Your Rights Under The CCPA</strong></h3>
            <p>Where provided for by law and subject to any applicable exceptions and exclusions, California residents may have the following rights: </p>

            <h3><strong>The Right To Know</strong></h3>
            <ul>
            <li>What categories and specific pieces of PII we have collected about you;</li>
            <li>The categories of sources from which PII are collected;</li>
            <li>Our business or commercial purpose for collecting, using, or disclosing PII;</li>
            <li>The categories of third parties with whom we share PII; and</li>
            <li>The categories of PII we have sold or disclosed for a business purpose.</li>
            <li>You have a right to request, no more than twice in a 12-month period, that we disclose to you the specific PII we have collected about you since January 1, 2022. </li>
            </ul>

            <p><u>Information Sold or Shared</u>. We have not sold or shared, as defined by the CPPA, any personal information to third parties for a business or commercial purpose since January 1, 2022. </p>
            <p>You also have a right to know if we have sold or disclosed your personal information for a business purpose since January 1, 2022 and, if so, the categories of personal information sold or disclosed and the categories of third parties to whom the personal information was sold or disclosed, along with the business or commercial purpose for which the personal information was sold or disclosed. </p>
            <p>To make a request for any of the information set forth above (a “Request to Know”), please submit a request pursuant to the instructions below. You may only make a Request to Know twice within a 12-month period. We will acknowledge your Request to Know within 10 days and will attempt to respond substantively within 45 – 90 days. </p>
            <p>You or your designated authorized agent can make a Request to Know the personal information we have about you by filling out our online form available <a href="/ccpa-request">here</a> or emailing us at <a href="mailto:privacy@thewinegroup.com">privacy@thewinegroup.com</a>. </p>

            <h3><strong>Right To Know About Sensitive PII Collected</strong></h3>
            <p>We collect and use your sensitive personal information as described in Annex 1 below.</p>
            <p>We do not collect or process sensitive personal information for the purpose of inferring characteristics. Sensitive information is defined by the CCPA as information that reveals any of the following: your social security, driver’s license, state identification card, or passport number, your account log-in, financial account, debit card, or credit card number in combination with any required security or access code, password, or credentials allowing access to an account, your precise geolocation; your racial or ethnic origin, religious or philosophical beliefs, or union membership, the contents of your mail, email, and text messages unless the business is the intended recipient of the communication, and your genetic data, biometric information for the purpose of uniquely identifying you, information collected and analyzed concerning your health, and information collected and analyzed concerning your sex life or sexual orientation. </p>

            <h3><strong>Right To Request Deletion Of PII</strong></h3>
            <p>You or your designated authorized agent have the right to request deletion of your personal information collected or maintained by us (“Request to Delete”), subject to certain exceptions permitted by law. </p>
            <p>To make a Request to Delete, please submit a request pursuant to the instructions below. We will acknowledge your Request to Know within 10 days and will attempt to respond substantively within 45 – 90 days. </p>
            <p>As permitted by law, if the information requested to be deleted is necessary for us to maintain, we will not be able to comply with your request. We will notify you if this is the case. </p>
            <p>You or your designated authorized agent can make a Request to Delete the personal information we have about you by filling out our online form available <a href="/ccpa-request/">here</a> or emailing us at <a href="mailto:privacy@thewinegroup.com">privacy@thewinegroup.com</a>. </p>
            <p>We will retain correspondence, documents and information related to any Request to Know, Request to Delete, or Request to Opt Out for 24 months as required by law. </p>

            <h3><strong>Third-Party Policies</strong></h3>
            <p>This Privacy Policy does not apply to, and we are not responsible for, third-party cookies, web beacons, or other tracking technologies, which are covered by such third parties’ privacy policies. For more information, we encourage you to check the privacy policies of these third parties to learn about their privacy practices. </p>
            <p><u>Cookies</u>. As explained in our “Collection and Use Of Online Activity Information” section, you can opt out of cookies using your browser. Please note: </p>
            <ul>
            <li>Opt-outs are device- and browser-based. You must opt out on each device and each browser where you want your choice to apply. </li>
            <li>Opt-outs may be stored via cookies. If you clear cookies, your opt-out may no longer be valid and you must opt out again where you want your choices to apply. </li>
            <li>We may still share your personal information with our service providers that help us perform functions that are necessary for our business such as vendors that host our website, credit card processors and analytics processors. These entities are contractually obligated to keep this information confidential and not use it for any purpose other than for the services they provide to our business. </li>
            <li>You may still receive ads from us that are not tailored to your interests.</li>
            </ul>
            <p>In addition to the above options to opt out of the sale or sharing of your information under the CCPA as described above, you have controls and choices with respect to collection and use of your information by third parties. These are summarized for you below. We do not control or maintain opt-out mechanisms for third-party companies and are not responsible for their operation. </p>
            <p>Advertising Opt Out. You can opt out of sharing your information with third-party companies engaged in targeted advertising including social networking websites such as Google and Facebook using the following tools: <br>For websites: <a href="http://optout.aboutads.info/?c=2&lang=EN" target="_blank" rel="noopener"> http://optout.aboutads.info/?c=2&lang=EN</a>. <br>For mobile apps: <a href="http://www.aboutads.info/appchoices" target="_blank" rel="noopener"> http://www.aboutads.info/appchoices</a>. </p>
            <p>Google Opt Out. If you would like to opt out of Google Analytics and Ads, you can. If you are on the web, you can opt out of Google Analytics by installing Google’s Opt Out browser add on <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">https://tools.google.com/dlpage/gaopto</a>. </p>
            <p>Facebook Ad Preferences. To understand more about Facebook advertising and manage your preferences, please visit <a href="https://www.facebook.com/about/ads" target="_blank" rel="noopener"> https://www.facebook.com/about/ads</a>. Login to Facebook and go to Settings > Ads > Ad Settings (web) or Ad Preferences > Ad Settings (app) for more information. </p>

            <h3><strong>Right To Correct</strong></h3>
            <p>You have the right to request that we correct any inaccurate information about you. To make a request to correct inaccurate information about you (a “Request to Correct”), please submit a request pursuant to the instructions below. We will acknowledge your request within 10 days and attempt to respond substantively within 45 – 90 days. </p>
            <p>We will review all information provided by you to determine whether the information in our records is inaccurate. We reserve the right to delete the information instead of correcting if such deletion does not impact you or your consent to the deletion. We will inform you of our decision to deny or grant your request. </p>
            <p>You or your designated authorized agent can make a Request to Correct the personal information we have about you by filling out our online form available <a href="/ccpa-request">here</a> or emailing us at <a href="mailto:privacy@thewinegroup.com">privacy@thewinegroup.com</a>. </p>
            <p>We will retain correspondence, documents, and information related to any Request to Correct for 24 months as required by law. </p>
            <p><strong>Right To Access Information About Automated Decision Making And The Right To Opt-Out Of Automated Decision Making</strong> </p>
            <p>We do not use automated decision making processes.</p>
            <p><u>Business-to-Business Information</u>. If you are a contact person for any of our business partners, vendors, distributors, suppliers, service providers, contractors, or other entities with which we have a business relationship or potential business relationship, we collect the contact information you provide to us, including name, phone number, address, email address and other contact and relationship information consistent with your role in facilitating that business relationship. We use that information for internal purposes, including to contact you, send and receive information, and otherwise facilitate the business relationship. We do not disclose that information outside our business relationship without your consent. </p>

            <h3><strong>California Shine The Light Disclosure Information</strong></h3>
            <p>Although we do not disclose to any third parties for their marketing purposes any of your personal information, California residents are entitled to receive the following disclosure. If you are a resident of California: </p>
            <p>Under California Law, California residents have the right to request in writing from businesses with which they have an established business relationship: (1) a list of the categories of personal information, such as name, address, e-mail address, and the type of services provided to the customer, that a business has disclosed to third parties (including as defined by California Civil Code Section 1798.83 our affiliates that are separate legal entities) during the immediately preceding calendar year for the third-parties’ direct marketing purposes, and (2) the names and addresses of all such third parties. We will respond to such written requests within 30 days following receipt at the e-mail or mailing address specified below under “Contact Us”. If we receive your request at a different e-mail or mailing address, we will respond within a reasonable period of time, but not to exceed 150 days from the date received. Please note that we are required to respond to each customer only once per calendar year. </p>
            <p><strong>Non-Discrimination.</strong> If you choose to exercise any of the rights detailed in this Notice, we will not discriminate against you in any way as a result of that exercise, including by offering you different pricing or products or by providing you with a different level of quality of products. </p>
            <p><strong>Notice of Financial Incentive.</strong> We may offer programs, benefits, sweepstakes or other offerings related to the collection or retention of personal information which may be deemed a “financial incentive” under the CCPA. Consumers who elect to participate in financial incentive programs (such as reward programs, limited-time promotions, sweepstakes, or contests) may be asked to provide personal information such as your name, email address, physical address, and or phone number. We may also collect commercial information such as credit card numbers and payment information (in limited circumstances), details of transactions that you carry out through our services, including products purchased or considered, and wine club information from consumers who elect to participate in a rewards program. The details of each program or offering are described in the applicable terms and conditions. </p>
            <p>Under the CCPA, the incentives we offer in exchange for the opportunity to market to you may be considered financial incentives. The value of the information you provide as part of a program will vary based on the program in which you participate and the number of consumers who chose to participate. We have made the determination that the CCPA-permitted financial incentive we offer is reasonably related to the value of your personal information, and we provide written terms that describe the program’s material aspects. Participation in a financial incentive program requires your prior opt-in consent, which you may revoke at any time but you may lose access to the relevant incentive. If you wish to opt-out, you may do so by sending your request to <a href="mailto:privacy@thewinegroup.com">privacy@thewinegroup.com</a>. </p>

            <h3><strong>How Can A Consumer With A Disability Access This Notice?</strong></h3>
            <p>Consumers who have a visual disability may be able to use a screen reader or other text-to-speech or text-to-Braille tool to review the contents of this Notice. </p>

            <h3><strong>How To Submit A Request.</strong></h3>
            <p>To submit a request, <a href="/ccpa-request">click here</a> or email us at <a href="mailto:privacy@thewinegroup.com">privacy@thewinegroup.com</a>. </p>

            <h3><strong>Verifying Requests</strong></h3>
            <p>All requests must provide sufficient information to allow us to verify that you are the person about whom the personal information was collected, sold or disclosed and must contain sufficient detail to allow us to properly understand, evaluate and respond to your request. You may be asked to provide additional proof of identification so that we can verify your identity and validate the request. If we cannot verify your identity, we may decline to honor your request. </p>
            <p>To help protect your privacy and maintain security, we will take steps to verify your identity before granting you access to your PII or complying with your request. If you have an account with us, we may verify your identity by requiring you to sign into your account. If you do not have an account with us, or if we suspect fraudulent or malicious activity, we may require you to provide additional PII for verification and, in certain circumstances, sign a declaration under penalty of perjury that you are the consumer whose PII is the subject of the request. If we cannot verify your identity, we will not provide or delete your PII. </p>

            <h3><strong>Authorized Agents</strong></h3>
            <p>You may submit a request through an authorized agent using the same methods available to you. If you designate an authorized agent to make an access, deletion or opt-out of sale request on your behalf (1) we may require you to provide the authorized agent signed permission to do so, and (2) for access and deletion requests, we may require you to verify your own identity directly with us (as described above), and confirm that you have provided the agent permission to submit the request. </p>

            <h3><strong>Additional Information</strong></h3>
            <p>Employees and contractors are provided notice via different statements.</p>

            <h3><strong>Contacting Us</strong></h3>
            <p>If you have questions or concerns regarding this California Privacy Notice or the practices described, please email us at <a href="mailto:privacy@thewinegroup.com"> privacy@thewinegroup.com</a>.</p>
        

      <?php elseif ($page_slug === $terms_page_title) : ?>
            <!-- **************** -->
            <!-- TERMS OF SERVICE -->
            <!-- **************** -->
            <h1 style="margin-bottom: 50px;">Terms of Service</h1>
            <p><small>Last Updated: <?php echo $updated_date; ?></small></p>

            <p>Please read these Terms of Service (this “Agreement” or TOS) carefully. This Agreement is between you and The Wine Group LLC doing business as <?php echo $brand_name; ?> (“Company” “TWG,” “we” or “us”) concerning your use of (including any access to) Company’s website, currently located at <?php echo $brand_name; ?> (together with any materials and services available therein, and successor website(s) thereto, the “Site”). This Agreement hereby incorporates by this reference any additional terms and conditions with respect to the Site posted by Company to the Site, or otherwise made available to you by Company.  For more information about Company and our brands, please visit <a href="https://www.thewinegroup.com" target="_blank" rel="noopener">www.thewinegroup.com</a>.</p>

            <p>We may update or change these terms from time to time. Any changes to this Agreement will become effective as indicated in the “Last Updated” line at the bottom of this page.</p>

            <p>By clicking or tapping any button or box marked “accept,” “agree” or “OK” (or a similar term) in connection with this Agreement, or by using the Site, you agree to be bound by this Agreement and our <a href="/privacy-policy">Privacy Policy</a>, and affirm that you are of legal drinking age where you live and have the legal capacity to enter into this Agreement.  THIS AGREEMENT CONTAINS TERMS WHICH LIMIT YOUR RIGHT REGARDING LIABILITY, DISPUTE RESOLUTION, AND YOUR ABILITY TO PURSUE CLASS ACTION LITIGATION.  PLEASE REVIEW THESE TERMS CAREFULLY BEFORE AGREEING.</p>

            <h3><strong>1. Restrictions</strong></h3>
            <p>To use the Site, you must be 21 years of age or older, the legal drinking age in the United States, and a resident of the United States.  If you are not, please exit this Site immediately.</p>

            <h3><strong>2. Information Submitted Through the Site</strong></h3>
            <p>Your submission of information to us, including any user generated content, is governed by this Agreement (including the Privacy Policy) and any other terms applicable to your submission (such as the terms of any social media website if you submit user generated content to use via a social media site or application).  You represent, warrant and agree that any information you provide is and will remain accurate and complete, and that you will maintain and update such information as needed.  For more information about how your personal information is handled and your rights under applicable privacy laws, please see our <a href="#" data-uw-rm-brl="PR" data-uw-original-href="https://www.<?php echo $brand_URL; ?>/privacy-policy/#">Privacy Policy</a>.</p>

            <h3><strong>3. Rules of Conduct</strong></h3>
            <p>In connection with the Site, you must not:</p>
            <ul>
            <li>Post, transmit or otherwise make available through or in connection with the Site any materials that are or may be: (a) threatening, harassing, degrading, hateful or intimidating, or otherwise fail to respect the rights and dignity of others; (b) defamatory, libelous, fraudulent or otherwise tortious or illegal; (c) obscene, indecent, pornographic or otherwise objectionable; or (d) protected by copyright, trademark, trade secret, right of publicity, privacy or any other proprietary or third party right, without the express prior written consent of the applicable owner.</li>
            <li>Post, transmit or otherwise make available through or in connection with the Site any virus, worm, Trojan horse, Easter egg, time bomb, bug, malware, spyware or other computer code, file or program that is or is potentially harmful or invasive or intended to damage or hijack the operation of, or to monitor the use of, any hardware, software or equipment (each, a “Virus”).</li>
            <li>Use the Site for any commercial purpose, or for any purpose that is fraudulent or otherwise tortious or unlawful.</li>
            <li>Harvest, scrape, or collect information about users of the Site.</li>
            <li>Use the Site for any commercial solicitation purposes, or transmit through or in connection with the Site, any spam, chain letters or other unsolicited communications.</li>
            <li>Interfere with or disrupt the operation of the Site or the servers or networks used to make the Site available, including by hacking or defacing any portion of the Site (including any content available thereby); or violate any requirement, procedure or policy of such servers or networks.</li>
            <li>Restrict or inhibit any other person from using the Site.</li>
            <li>Reproduce, modify, adapt, translate, create derivative works of, sell, rent, lease, loan, timeshare, distribute or otherwise exploit any portion of (or any use of) the Site or is contents, except as expressly authorized herein, without Company’s express prior written consent.</li>
            <li>Reverse engineer, decompile or disassemble any portion of the Site, except to the extent such restriction is expressly prohibited by applicable law.</li>
            <li>Remove any copyright, trademark or other proprietary rights notice from the Site.</li>
            <li>Frame or mirror any portion of the Site, or otherwise incorporate any portion of the Site into any product or service, without Company’s express prior written consent.</li>
            <li>Systematically download and store Site content.</li>
            <li>Use any robot, spider, site search/retrieval application or other manual or automatic device to retrieve, index, “scrape,” “data mine” or otherwise gather Site content (including Submissions), or reproduce or circumvent the navigational structure or presentation of the Site, without Company’s express prior written consent. Notwithstanding the foregoing, and subject to compliance with applicable law and any instructions posted in the robots.txt file located in the Site’s root directory, Company grants to the operators of public search engines permission to use spiders to copy materials from the Site for the sole purpose of (and solely to the extent necessary for) creating publicly available, searchable indices of such materials, but not caches or archives of such materials. Company reserves the right to revoke such permission either generally or in specific cases, at any time and without notice.</li>
            </ul>

            <p>You are responsible for obtaining, maintaining and paying for all hardware, software, telecommunications and other services needed for you to access the Site (including any applicable device data transmission charges).</p>

            <h3><strong>4. Resources</strong></h3>
            <p>The Site may make available information, data, materials, services, products, merchandise, functionality or other resources (collectively, “Resources”), as well as references and links to such Resources. Resources may be made available by Company or by others, and may be made available for any purpose, including for general information purposes.</p>

            <p>Certain descriptions of our products and services may be referenced on the Site (including wine, merchandise, and other items for sale, “Products”); they are approximate and are for convenience only. We make reasonable efforts to accurately display the attributes of Products, including the applicable colors and appearance, however the actual colors and appearance you see will depend on your device, software and settings, vintage etc., and we cannot guarantee that such colors and appearance will be accurately displayed. It is your responsibility to ascertain and obey all applicable local, state, federal and foreign laws (including minimum age requirements) regarding the purchase, possession and use of any Product.</p>

            <h3><strong>5. Third Party Resources; Links</strong></h3>
            <p>We may provide access to Resources or content from third parties (“Third Party Resources”), including via links; by using such functionality, you are directing us to access, route and transmit to you the applicable Third Party Resources.</p>

            <p>We neither control nor endorse, nor are we responsible for, any Third Party Resources, including the accuracy, validity, timeliness, completeness, reliability, integrity, quality, legality, usefulness or safety of Third Party Resources, or any intellectual property rights therein. Nothing in this Agreement will be deemed to be a representation or warranty by Company with respect to any Third Party Resources. We have no obligation to monitor Third Party Resources, and we may block or disable access to any Third Party Resources (in whole or part) through the Site at any time. In addition, the availability of any Third Party Resources through the Site does not imply our endorsement of, or our affiliation with, any provider of such Third Party Resources other than any of our affiliates (including The Wine Group and the other brands presented <a href="https://thewinegroup.com/our-brands/" target="_blank" rel="noopener">here</a>), nor does such availability create any legal relationship between you and any such provider.</p>

            <p>Your use of Third Party Resources is at your own risk and is subject to any additional terms, conditions and policies applicable to such Third Party Resources (such as terms of service or privacy policies of the providers of such Third Party Resources).</p>

            <h3><strong>6. Transactions</strong></h3>
            <p>We may make available the ability to purchase or otherwise obtain Products through the Site (a “Transaction”). If you wish to make a Transaction, you may be asked to supply certain relevant information, such as details regarding your method of payment (e.g., your credit or debit card number and its expiration date, or your selection of a payment service), your billing address and, if applicable, your shipping information. You represent and warrant that you have the right to use any payment method (e.g., credit or debit card or payment service) with respect to which you submit information in connection with a Transaction. By submitting payment information, you grant to us the right to provide such information to third parties for purposes of facilitating Transactions. Verification of information may be required prior to the acknowledgment or completion of any Transaction. By making a Transaction, you represent that the applicable Products will be used only in a lawful manner.</p>

            <p>Company reserves the right (but has no obligation), at any time and without liability or prior notice, to limit the availability of or discontinue making available any Product; to change any Product prices prior to purchase; to impose conditions on the honoring of, or discontinue, any coupon, discount, rebate or similar promotion; to bar any user from making any Transaction; and to refuse to provide any user with any Product. You agree to pay all charges incurred by you or on your behalf through the Site, at the prices in effect when such charges are incurred, including all shipping and handling charges. In addition, you are responsible for any taxes applicable to your Transactions. Refunds and exchanges will be subject to Company’s applicable refund and exchange policies. The receipt of an e-mail order confirmation does not constitute our acceptance of an order or our confirmation of an offer to sell a product or service. Transactions may be subject to additional terms, conditions and policies; if, with respect to a Transaction, any such terms, conditions and policies conflict with these Terms of Service, such Transaction terms, conditions and policies will govern with respect to such Transaction to the extent of such conflict.</p>

            <p>Tangible Products will be shipped to an address designated by you, if applicable, so long as such address is complete and complies with the shipping restrictions contained on the Site. All Transactions with respect to tangible Products are made pursuant to a shipment contract and, as a result, risk of loss and title for Products pass to you upon delivery of such Products to the carrier. You are responsible for filing any claims with carriers for damaged and/or lost shipments.</p>

            <p>In addition, some of our brands may offer a wine club.  In order to purchase any wine, including becoming a member of our wine club, you must be 21 years of age or older and someone, age 21 or older, must be at the “ship-to” address to sign for the package on the day of delivery. Packages will not be left at your door.  Shipping charges for returned and undelivered shipments will be at your expense.</p>

            <p>You understand that wine club memberships are an ongoing membership. You must cancel your membership at least 30 days prior to your next shipment.  The credit card on file will be charged prior to shipping.  Additional terms will be provided when you sign up for the membership and on the membership page on this Site</p>

            <h3><strong>7. Registration; User Names and Passwords</strong></h3>
            <p> You may need to register or otherwise enter a user name, password or other data, information or credential with respect to the Site, whether provided by you or provided to you (collectively, “Access Credentials”), to use all or part of the Site. We may reject, or require that you change, any Access Credential that you provide, and we may change or terminate any Access Credential that we may provide to you, in each case in our sole discretion. Your Access Credentials are for your personal use only in accordance with this Agreement and you should keep them confidential; you, and not Company, are responsible for any use or misuse of your Access Credentials, and, in each case, you must promptly notify us of any actual or suspected confidentiality breach or unauthorized use of your Access Credentials or your Site account.</p>

            <h3><strong>8. Submissions</strong></h3>
            <p>You may be able to post or submit content (including but not limited to photos/videos, text, comments, art, graphics, designs, user generated content, ideas, or other information) by: 1. Transmitting via the Site, or posting to the Site or our brand pages on social media, 2. by identifying us in a hashtag or tagging us on any social media or other platform, or 3. via any other communication methods (including but not limited to email or text message), including as part of a Promotion (as defined below) (together with Your Product Photos (as defined below), your “Submission”).</p>

            <p>For purposes of clarity, you retain ownership of each Submission.  You hereby grant to us a non-exclusive, worldwide, royalty-free, fully paid-up, perpetual, irrevocable, transferable and fully sublicensable (through multiple tiers) license, without additional consideration to you or any third party, to reproduce, distribute, perform and display (publicly or otherwise), create derivative works of, adapt, modify, store and otherwise use, analyze and exploit your Submission, in any format or media now known or hereafter developed, and for any purpose (including promotional purposes, such as testimonials), including any name, signature, voice, image, likeness, performance, movements, personal characteristics, gestures and mannerisms (collectively, “Likeness”) of a natural person included in your Submission.  Submissions include any images of any Product that you transmit to us or post through any social media website or online service or other publicly available online service (any such image, “Your Product Photo”), including any such image accompanied by a hashtag reference using any of our trademarks or any other terms, slogans or keywords referencing Company or its products and/or services.</p>

            <p>In addition, if you provide to us any ideas, proposals, suggestions or other materials as part of any Submission, whether related to the Site, Service, Product or otherwise, you hereby acknowledge and agree that such Submission is not confidential, and that your provision of such Submission is gratuitous, unsolicited and without restriction, and does not place Company under any fiduciary or other obligation.</p>

            <p>You represent and warrant that (a) you have all rights necessary to grant the licenses granted in this section; (b) your Submissions are complete and accurate; and (c) your Submissions and your provision thereof to us (whether through and in connection with the Site, or otherwise), and your provision thereof are not fraudulent, tortious or otherwise in violation of any applicable law or any right of any third party (including any contractual, intellectual property, publicity, Likeness, or privacy rights). You further irrevocably waive any “moral rights” or other rights with respect to attribution of authorship or integrity of materials regarding your Submissions that you may have under any applicable law under any legal theory.</p>

            <p>We may request you provide releases or proof of permission from any third parties depicted in your Submission.  You agree to pay for all royalties, fees and other monies owing to any person by reason of any Submission you transmit to Company.</p>

            <h3><strong>9. Monitoring</strong></h3>
            <p>We may (but have no obligation to) monitor, moderate and/or analyze your use of the Site, and monitor, moderate, analyze, alter and/or remove Submissions before or after they appear on the Site. We may disclose information regarding your access to and use of the Site, and the circumstances surrounding such access and use, to anyone for any reason or purpose.</p>

            <h3><strong>10. Your Limited Rights</strong></h3>
            <p>Subject to your compliance with this Agreement, and solely for so long as you are permitted by Company to use the Site, you may view and use any portion of the Site to which we provide you access under this Agreement, solely in accordance with the functionality that we make available to you, solely for your personal, non-commercial use.</p>

            <h3><strong>11. Company’s Proprietary Rights</strong></h3>
            <p>As between you and us, we own the Site and all content thereon, which is protected by proprietary rights and laws. All trade names, trademarks, service marks, logos and copyrightable works available through the Site are the property of their respective owners and nothing contained on the Site should be construed as granting any right to use them without the express prior written consent of the owner.  You agree you will not use our trade names, trademarks, service marks or logos or copyrighted content in connection with any product or service that is not ours, or in any manner that is likely to cause confusion.</p>

            <h3><strong>12. Promotions</strong></h3>
            <p>Any sweepstakes, contests, raffles, surveys, games, coupons, rebates or similar promotions (collectively, “Promotions”) made available through the Site may be governed by rules that are separate from these Terms of Service. If you participate in any Promotions, please review the applicable rules as well as the Privacy Policy. If the rules for a Promotion conflict with these Terms of Service, the Promotion rules will govern with respect to such Promotion to the extent of such conflict.</p>

            <h3><strong>13. Disclaimer of Warranties</strong></h3>
            <p>To the fullest extent permitted under applicable law: (a) the Site and any Resources (including any Third Party Resources and Products) are made available to you on an “As Is,” “Where Is” and “Where Available” basis, without any warranties of any kind, whether express, implied or statutory; and (b) Company disclaims all warranties with respect to the Site and any Resources (including any Third Party Resources), including the warranties of merchantability, fitness for a particular purpose, non-infringement and title. All disclaimers of any kind (including in this section and elsewhere in this Agreement) are made for the benefit of Company, its affiliates and their respective owners, directors, officers, employees, affiliates, agents, representatives, licensors, suppliers and service providers, and their respective successors and assigns (collectively, the “Company Parties”).</p>

            <p>While we seek to maintain the timeliness, integrity and security of the Site, we do not guarantee that the Site is or will remain updated, complete, correct or secure, or that access to the Site will be uninterrupted. The Site may include inaccuracies, errors and materials that violate or conflict with this Agreement. Additionally, third parties may make unauthorized alterations to the Site. If you become aware of any such alteration, contact us at <a href="mailto:info@<?php echo $brand_URL; ?>">info@<?php echo $brand_URL; ?></a> with a description of such alteration and its location on the Site.</p>

            <h3><strong>14. Limitation of Liability</strong></h3>
            <p>To the fullest extent permitted under applicable law: (a) no Company Party will be liable for any direct, indirect, incidental, consequential, special, exemplary or punitive damages of any kind arising out of or in connection with the Site or this Agreement, under any contract, tort (including negligence), strict liability or other theory, including damages for diminution of value, loss of profits, loss of revenue, loss of business, loss of use or data, loss of goodwill, loss of other intangibles, loss of security of Submissions (including unauthorized interception by third parties of any Submission), even if advised in advance of the possibility of such damages or losses; (b) without limiting the foregoing, no Company Party will be liable for damages of any kind resulting from your use of or inability to use the Site or from any Resources (including any Third Party Resources or Products), including from any Virus that may be transmitted in connection therewith; (c) except as set forth in Section 6 “Transactions” above, your sole and exclusive remedy for dissatisfaction with the Site or any Resources (including any Third Party Resources) is to stop using the Site; and (d) the maximum aggregate liability of all Company Parties, collectively, for all damages, losses and causes of action, whether in contract, tort (including negligence) or otherwise, will be equal to the greater of (i) the total amount, if any, paid by you to Company in connection with this Agreement during a twelve (12)-month period; and (ii) twenty U.S. dollars ().  ANY CAUSE OF ACTION ARISING OUT OF OR RELATED TO THE SITE MUST BE COMMENCED WITHIN ONE (1) YEAR AFTER THE CLAIM OR CAUSE OF ACTION ACCRUES, OTHERWISE SUCH CLAIM AND CAUSE OF ACTION WILL BE PERMANENTLY BARRED.  All limitations of liability of any kind (including in this section and elsewhere in this Agreement) are made for the benefit of both Company and the each of the other Company Parties.</p>

            <p>Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.</p>

            <h3><strong>15. Indemnity</strong></h3>
            <p>To the fullest extent permitted under applicable law, you agree to defend, indemnify and hold harmless each Company Party from and against all claims, liabilities, damages, judgments, awards, losses, costs, expenses and fees (including attorneys’ fees and expenses) arising out of or relating to (a) your use of, or activities in connection with, the Site (including Your Submissions); or (b) any violation or alleged violation of this Agreement by you.</p>

            <h3><strong>16. Termination</strong></h3>
            <p>This Agreement is effective until terminated. Company may terminate this Agreement or suspend your right to use the Site at any time and without prior notice, for any or no reason, including if Company believes that you have violated or acted inconsistently with the letter or spirit of this Agreement. Upon any such termination or suspension, your right to use the Site will immediately cease, and Company may, without liability to you or any third party, immediately deactivate or delete your Access Credentials, your Submissions and all associated materials, without any obligation to provide any further access to such materials. The preamble and Sections 2-9 and 11-23 will survive any termination of this Agreement.</p>

            <h3><strong>17. Jurisdictional Issues</strong></h3>
            <p>The Site is controlled or operated (or both) from California, United States, and is not intended to subject Company to any non-U.S. jurisdiction or law. The Site may not be appropriate or available for use in some non-U.S. jurisdictions. Any use of the Site is at your own risk, and you must comply with all applicable laws, rules and regulations in doing so. We may limit the Site’s availability at any time, in whole or in part, to any person, geographic area or jurisdiction that we choose.</p>

            <h3><strong>18. Governing Law; Arbitration; Class Action Waiver</strong></h3>
            <p>This Agreement, your use of (including any access to) the Site (including all Transactions), and all related matters are governed solely by, and construed solely in accordance with, the laws of the United States (including federal arbitration law) and the State of California, U.S.A., without regard to its principles of conflicts of law that would cause the application of the laws of any other jurisdiction, and regardless of your location. Except for disputes that qualify for small claims court, all disputes arising out of or related to this Agreement, your use of (including any access to) the Site (including all Transactions) and all related matters, whether based in contract, tort, statute, fraud, misrepresentation or any other legal theory, will be resolved through final and binding arbitration before a neutral arbitrator instead of in a court by a judge or jury and you agree that Company and you are each waiving the right to trial by a jury. You agree that any arbitration under this Agreement will take place on an individual basis; class arbitrations and class actions are not permitted and you are agreeing to give up the ability to participate in a class arbitration or class action. The arbitration will be administered by the American Arbitration Association (the “AAA”) under its Consumer Arbitration Rules (currently available at <a href="https://www.adr.org/aaa/ShowProperty?nodeId=/UCM/ADRSTAGE2021425&revision=latestreleased" target="_blank" rel="noopener">https://www.adr.org/aaa/ShowProperty?nodeId=/UCM/ADRSTAGE2021425&revision=latestreleased</a>), as amended by this Agreement. The arbitrator will conduct hearings, if any, by teleconference or videoconference, rather than by personal appearances, unless the arbitrator determines upon request by you or by us that an in-person hearing is appropriate. Any in-person appearances will be held at a location which is reasonably convenient to both parties with due consideration of their ability to travel and other pertinent circumstances. If the parties are unable to agree on a location, such determination should be made by the AAA or by the arbitrator. The arbitrator’s decision will follow the terms of this Agreement and will be final and binding. The arbitrator will have authority to award temporary, interim or permanent injunctive relief or relief providing for specific performance of this Agreement, but only to the extent necessary to provide relief warranted by the individual claim before the arbitrator. The award rendered by the arbitrator may be confirmed and enforced in any court having jurisdiction thereof. Notwithstanding any of the foregoing, nothing in this Agreement will preclude you from bringing issues to the attention of federal, state or local agencies and, if applicable law allows, they can seek relief against us for you.</p>

            <h3><strong>19. Parental Control Protections</strong></h3>
            <p>We hereby notify you that parental control protections (such as computer hardware, software or filtering services) are commercially available that may assist you in limiting access to material that is harmful to minors. Information identifying current providers of such protections is available from <a href="https://en.wikipedia.org/wiki/Comparison_of_content-control_software_and_providers" target="_blank" rel="noopener">https://en.wikipedia.org/wiki/Comparison_of_content-control_software_and_providers</a>. Please note that Company does not endorse any of the products or services listed on such site.</p>

            <h3><strong>20. Information or Complaints</strong></h3>
            <p>If you have a question or complaint regarding the Site, please send an e-mail to <a href="mailto:info@<?php echo $brand_URL; ?>">info@<?php echo $brand_URL; ?></a>. You may also contact us by writing to <?php echo $brand_name; ?> Information Request/Complaint,  17000 East Highway 120, Ripon, CA 95336, or by calling us at (925) 456-2500. Please note that e-mail communications will not necessarily be secure; accordingly you should not include credit card information or other sensitive information in your e-mail correspondence with us. California residents may reach the Complaint Assistance Unit of the Division of Consumer services of the California Department of Consumer Affairs by mail at 1625 North Market Blvd., Sacramento, CA 95834, or by telephone at (916) 445-1254 or (800) 952-5210.</p>

            <h3><strong>21. Copyright Infringement Claims</strong></h3>
            <p>We are committed to respecting the legal rights of copyright owners, including those who believe that material appearing on the Internet infringes their rights under U.S. copyright law. If you believe in good faith that materials available from the Site infringe your copyright, you (or your agent) may send to Company a written notice by mail or e-mail, requesting that Company remove such material or disable access to it. If you believe in good faith that someone has wrongly submitted to us a notice of copyright infringement involving content that you made available through the Site, you may send to Company a counter-notice. </p>

            <p>If you believe that your work has been copied and posted on the Site in a way that constitutes copyright infringement, please provide our designated agent with the following minimum information:</p>

            <ul>
            <li>an electronic or physical signature of the person authorized to act on behalf of the owner of the copyright or other intellectual property interest;</li>
            <li>a description and identification of the copyrighted work or other intellectual property that you claim has been infringed, or, if multiple copyrighted works at a single online website are covered by a single notification, a representative list of such works at that website;</li>
            <li>a description of where the material that you claim is infringing is located on the Site in a manner sufficient to permit us to locate the material;</li>
            <li>your address, telephone number, and email address;</li>
            <li>a statement by you that you have a good faith belief that the disputed use is not authorized by the copyright or intellectual property owner, its agent, or the law; and</li>
            <li>a statement by you, made under penalty of perjury, that the information contained in your report is accurate and that you are the copyright or intellectual property owner or authorized to act on the copyright or intellectual property owner’s behalf.</li>
            </ul>

            <p>Notices and counter-notices must be sent in writing to our designated DMCA agent as follows: By mail to GENERAL COUNSEL, The Wine Group LLC, 4596 Telsa Road, Livermore, CA 94550; by e-mail to <a href="mailto:copyright@TheWineGroup.com">copyright@TheWineGroup.com</a>. You can also reach our DMCA agent at the following telephone number: 925-456-2500.</p>

            <p>We suggest that you consult your legal advisor before sending a DMCA notice or counter-notice. It is Company’s policy to terminate, in appropriate circumstances, a Site user’s right to use the Site if they are deemed by Company to be repeat infringers.</p>

            <h3><strong>22. Export Controls</strong></h3>
            <p>You are responsible for complying with United States export controls and for any violation of such controls, including any United States embargoes or other federal rules and regulations restricting exports. You represent, warrant and covenant that you are not (a) located in, or a resident or a national of, any country subject to a U.S. government embargo or other restriction, or that has been designated by the U.S. government as a “terrorist supporting” country; or (b) on any of the U.S. government lists of restricted end users.</p>

            <h3><strong>24. Notification Procedures</strong></h3>
            <p>Anything sent to you is considered received immediately if sent to you by electronic notification without any indication of failed communication. An electronic notification is sent at the time it is directed by us to your email address or other means of receiving electronic notifications. You agree these are reasonable procedures for sending and receiving electronic notifications. We reserve the right, but are under no obligation, to send notifications in a paper format.</p>

            <!-- 
            <p><strong>24. </strong> </p>
            -->

            <h3><strong>25. Miscellaneous</strong></h3>
            <p>This Agreement does not, and will not be construed to, create any partnership, joint venture, employer-employee, agency or franchisor-franchisee relationship between you and Company. If any provision of this Agreement is found to be unlawful, void or for any reason unenforceable, that provision will be deemed severable from this Agreement and will not affect the validity and enforceability of any remaining provision. You may not assign, transfer or sublicense any or all of your rights or obligations under this Agreement. We may assign, transfer or sublicense any or all of our rights or obligations under this Agreement without restriction. No waiver by either party of any breach or default under this Agreement will be deemed to be a waiver of any preceding or subsequent breach or default. Any heading, caption or section title contained herein is for convenience only, and in no way defines or explains any section or provision. All terms defined in the singular will have the same meanings when used in the plural, where appropriate and unless otherwise specified. Any use of the term “including” or variations thereof in this Agreement will be construed as if followed by the phrase “without limitation.” This Agreement, including any terms and conditions incorporated herein, is the entire agreement between you and Company relating to the subject matter hereof, and supersedes any and all prior or contemporaneous written or oral agreements or understandings between you and Company relating to such subject matter. Notices to you (including notices of changes to this Agreement) may be made via posting to the Site or by e-mail to the most recent email address that you have provided to us (including in each case via links), or by regular mail to the most recent mailing address that you have provided to us. Without limitation, a printed version of this Agreement and of any notice given in electronic form will be admissible in judicial or administrative proceedings based upon or relating to this Agreement to the same extent and subject to the same conditions as other business documents and records originally generated and maintained in printed form. Company will not be responsible for any failure to fulfill any obligation due to any cause beyond its control.</p>

            <h3>NOTICES TO CALIFORNIA CONSUMERS</h3>
            <p>California Transparency in Supply Chains Act: <a href="http://thewinegroup.com/supply-chain-transparency/" target="_blank" rel="noopener noreferrer">http://thewinegroup.com/supply-chain-transparency/</a></p>

            <p><strong><u>Proposition 65</u></strong></p>

            <p>Prop 65 entitles California consumers to warnings for the following products:</p>

            <p>WARNING: Drinking Distilled Spirits, Beer, Coolers, Wine and Other Alcoholic Beverages May Increase Cancer Risk, and, During Pregnancy, Can Cause Birth Defects.  For More Information, Go to <a href="https://www.P65Warnings.ca.gov/alcohol" target="_blank" rel="noopener">www.P65Warnings.ca.gov/alcohol</a>.</p>

            <p>WARNING: Many food and beverage cans have linings containing bisphenol A (BPA), a chemical known to the State of California to cause harm to the female reproductive system. Jar lids and bottle caps may also contain BPA. You can be exposed to BPA when you consume foods or beverages packaged in these containers. For more information, go to: <a href="https://www.P65Warnings.ca.gov/BPA" target="_blank" rel="noopener">www.P65Warnings.ca.gov/BPA</a>. For a list of products go to: <a href="https://www.prop65bpa.org" target="_blank" rel="noopener">www.prop65bpa.org</a>.</p>

            <p>Site © 1997 – 2025 The Wine Group LLC unless otherwise noted. All rights reserved.</p>

            <p><small>Last Updated: <?php echo $updated_date; ?></small></p>


        <!-- ************ -->
        <!-- CCPA REQUEST -->
        <!-- ************ -->
        <?php elseif ($page_slug == $ccpa_request_title) : ?>
          <div class="ccpa-request-form contact-us">
            <div class="form">
              <?php echo do_shortcode($ccpa_request_shortcode); ?>
            </div>
          </div>   
        <?php endif; ?>
        
    </div>
  </div>
</div>

<?php get_footer(); ?> 