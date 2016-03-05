<?php
/**
 * Created by IntelliJ IDEA.
 * User: op
 * Date: 3/3/16
 * Time: 1:11 AM
 */

namespace AdsCottage\common;

use AdsCottage\common\ElementConstants ;

class CommonDetail

{
    public static function getApplicationMetaTagList()
    {
        $metaTag = [
            ["name" => 'CHARSET', "content" => "utf-8"],
            ["name" => "VIEWPORT", "content" => "E=edge"],
            ["name" => "X-UA-COMPATIBLE", "content" => "width=device-width, initial-scale=1.0"],
            ["name" => "VIEWPORT", "content" => "width=device-width, initial-scale=1.0"],
            ["name" => "COPYRIGHT", "content" => "Ads Cottage"],
            ["name" => "ABSTRACT", "content" => "Outdoor Advertising Online  "],
            ["name" => "DESCRIPTION", "content" => "Ads Cottage, online platform."],
            ["name" => "KEYWORDS", "content" => "Online, Outdoor, Advertising, Free, Ad,"],
            ["name" => "ROBOTS", "content" => "index, follow"],
            ["name" => "GOOGLEBOT", "content" => "index, follow"],
            ["name" => "GOOGLE-SITE-VERIFICATION", "content" => ""],
            ["name" => "REVISIT-AFTER", "content" => "2 days"],
            ["name" => "LANGUAGE", "content" => "en"],
            ["name" => "WEB_AUTHOR", "content" => "Pachoriya"],
            ["name" => "DISTRIBUTION", "content" => "global"],
            ["name" => "AUTHOR", "content" => "O.P. Pachoriya"]
        ];
        return $metaTag;
    }

    public static function getApplicationNavigationLinksDetails()
    {
        $navigationLinks = [
            'Home' => '/home',
            'Inventory' => [
                'Map Based' => '/explore/map',
                'Gallery' => '/explore/gallery'
            ],
            'Services' => [
                'Services' => '/info/services',
                'Planning' => '/info/planning',
                'Research' => '/info/research',
                'Advertisers' => '/info/advertisers',
                'Ad Site Owners' => '/info/adsiteowner',
                'Creative Makers' => '/info/creativemaker'
            ],
            'Why Us' => [
                'Features' => '/info/feature',
                'Pricing' => '/info/pricing'
            ],
            'About' => [
                'About' => 'company/about-us',
                'Testimonial' => 'company/testimonial',
                'Team' => 'company/team'
            ],
            'Join Us' => [
                'Ad Site Owners' => "partners/adsite-partner",
                'Advertiser' => "partners/advertiser",
                'Graphics Designer' => "partners/designer",
                'Printers' => "partners/print-partner",
                'Marketing' => "partners/marketing-partner",
                'Technology Group' => "partners/technology-partner",
                'Sales' => "partners/sales-partner"
            ],
            'Contact Us' => 'help/contact-us',
        ];
        return $navigationLinks;
    }

    public static function getApplicationWidgetLinks()
    {
        $widgetLinks = [
            [
                'display' => 'Company',
                'value' => [
                    ['display' => 'About Us', "icon" => "", "url" => "company/about-us"],
                    ['display' => 'Meet the Team', "icon" => "", "url" => "company/team"],
                    ['display' => 'Culture', "icon" => "", "url" => "company/culture"],
                    ['display' => 'News / Press', "icon" => "", "url" => "company/press"],
                    ['display' => 'Site map', "icon" => "", "url" => "company/site-map"]
                ]
            ],
            [
                'display' => 'Join Us',
                'value' => [
                    ['display' => 'We are Hiring', "icon" => "", "url" => "company/career"],
                    ['display' => 'Publishers / Site Owners', "icon" => "", "url" => "partners/adsite-partner"],
                    ['display' => 'Advertiser', "icon" => "", "url" => "partners/advertiser"],
                    ['display' => 'Graphics Designer ', "icon" => "", "url" => "partners/designer"],
                    ['display' => 'Printers', "icon" => "", "url" => "partners/print-partner"],
                    ['display' => 'Marketing', "icon" => "", "url" => "partners/marketing-partner"],
                    ['display' => 'Sales', "icon" => "", "url" => "partners/sales-partner"]
                ]
            ],
            [
                'display' => 'Need Help ?',
                'value' => [
                    ['display' => 'FAQ', "icon" => "", "url" => "help/faq"],
                    ['display' => 'Contact us', "icon" => "", "url" => "help/contact-us"],
                    ['display' => 'Copyright', "icon" => "", "url" => "policy/copyright"],
                    ['display' => 'Policy', "icon" => "", "url" => "policy"]
                ]
            ],
            [
                'display' => 'Payment Methods',
                'value' => [
                    ['display' => 'Net Banking', "icon" => "", "url" => "payment/net-banking"],
                    ['display' => 'Debit/Credit Card', "icon" => "", "url" => "payment/debit-credit-card"],
                    ['display' => 'Cash On Delivery', "icon" => "", "url" => "payment/cash-on-delivery"],
                    ['display' => 'E-Gift Voucher', "icon" => "", "url" => "payment/e-gift-voucher"]
                ]
            ]
        ];
        return $widgetLinks;
    }

    public static function getApplicationFooterLinks()
    {
        $footerLinks = [
            ['display' => 'Home', "icon" => "", "url" => WebConstants::COMPANY_WEB],
            ['display' => 'About Us', "icon" => "", "url" => "company/about-us"],
            ['display' => 'FAQ', "icon" => "", "url" => "help/faq"],
            ['display' => 'Contact Us', "icon" => "", "url" => "help/contact-us"],
            ['display' => 'Partners', "icon" => "", "url" => "partners"],
            ['display' => 'Sign In', "icon" => "", "url" => "company/sign-in"]
        ];
        return $footerLinks;
    }

    public static function getApplicationContactDetails()
    {
        $contactsDetails = [
            'social' => [
                "facebook" => "www.facebook.com",
                "twitter" => "www.twitter.com",
                "googleplus" => "www.google.com",
                "linkedin" => "wwww.linkedin.com"
            ],
            'phone' => '+91 7769871184',
            'fax' => '+91 9827091125',
            'address' => "Yugal Nadala, Baner, Pune, Maharashtra (India)" ,
            'email' => 'info@adscottage.com' ,
            'web' => 'www.adscottage.com'
        ];

        return $contactsDetails;
    }

    public static function getProjectFeatureListData()
    {
        return $response = [
            [
                'heading'=>'Data based decisions',
                'description' => 'Target audience based on data, analysis and reviews.',
                'icon' => 'fa-area-chart',
                'anchor' => 'false',
                'url' => '#'
            ],
            [
                'heading'=>'Inventory',
                'description' => 'Central information coverage for Indian market.',
                'icon' => 'fa-database',
                'anchor' => 'false',
                'url' => '#'
            ],
            [
                'heading'=>'Time Efficient',
                'description' => 'Business online, enjoy more personal time.',
                'icon' => 'fa-clock-o',
                'anchor' => 'false',
                'url' => '#'
            ]
        ] ;
    }

    public static function getJoinMeDetails($type)
    {
        $response = ['code' => 0] ;
        switch($type){
            case ElementConstants::HOME_PAGE_JOIN_ME:
                $response = [
                    'text' => 'Join Us' ,
                    'description' => 'Let\'s grow together and beautify Outdoor Advertisement Industry as
                    Advertiser, Publishers,  Channel Partners, Creative Designer, Printing Solution Providers,
                    Technology, Sales.' ,
                    'url' => '#'
                ];
            break;
            default:
                $response = [
                    'text' => 'Join Us' ,
                    'description' => 'Let\'s grow together and beautify Outdoor Advertisement Industry as
                    Advertiser, Publishers,  Channel Partners, Creative Designer, Printing Solution Providers,
                    Technology, Sales.' ,
                    'url' => '#'
                ];
        }
        return $response ;
    }

    public static function getPremiumCustomerDetails()
    {

    }

    public static function getTestimonials()
    {

    }

    public function getNewsDetails(){}

    public function getSEODetails(){}

    public function getSliderData($type = ElementConstants::HOME_PAGE_HEADER)
    {

    }

}