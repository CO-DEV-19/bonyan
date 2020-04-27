<?php
/**
*Plugin Name: Coronavirus Info
*Description: This plugin displays the COCID-19 real-time data, top-headline news and job impact, quantitative geographical mapping and forecasting through shortcodes in your WordPress post or page.
*Author: SoftwareElites
*Version: 1.0.0
*Author URI: https://www.software-elites.com/
**/

function usci_covid19_shortcode($url){
    echo '<iframe width="100%" height="1300" frameborder="0" src="'.esc_html($url).'"></iframe>';
}


function usci_covid19all_shortcode(){
    usci_covid19_shortcode('https://us-coronavirus.info/');
}


add_shortcode("covid19all", "usci_covid19all_shortcode"); 

function usci_covid19data_shortcode(){
    usci_covid19_shortcode('https://data.us-coronavirus.info/');
}


add_shortcode("covid19data", "usci_covid19data_shortcode"); 

function usci_covid19news_shortcode(){
    usci_covid19_shortcode('https://news.us-coronavirus.info/');
}


add_shortcode("covid19news", "usci_covid19news_shortcode"); 

function usci_covid19job_shortcode(){
    usci_covid19_shortcode('https://job.us-coronavirus.info/');
}


add_shortcode("covid19job", "usci_covid19job_shortcode"); 

function usci_covid19usmap_shortcode(){
    usci_covid19_shortcode('https://confirmedmap.us-coronavirus.info/');
}


add_shortcode("covid19usmap", "usci_covid19usmap_shortcode"); 

function usci_covid19worldmap_shortcode(){
    usci_covid19_shortcode('https://worldmap.us-coronavirus.info/');
}


add_shortcode("covid19worldmap", "usci_covid19worldmap_shortcode"); 

function usci_covid19test_shortcode(){
    usci_covid19_shortcode('https://testrate.us-coronavirus.info/');
}


add_shortcode("covid19test", "usci_covid19test_shortcode"); 

function usci_covid19forecast_shortcode(){
    usci_covid19_shortcode('https://forecast.us-coronavirus.info/');
}


add_shortcode("covid19forecast", "usci_covid19forecast_shortcode"); 
