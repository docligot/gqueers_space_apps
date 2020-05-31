# Global Impact Detection from Emitted Light, Onset of Covid, and NO2 (GIDEON)

## Summary

Public policymakers and economic planners are challenged to come up with agile strategies to cope with the ongoing pandemic. However economic data are lagging indicators and are seldom available in time enough to power quick decisions. We turned to Earth Observations, in-country Economic Data, Human Mobility data, and global infection case counts for a holistic assessment of COVID’s impact on various countries.

## GIDEON

GIDEON is an integrated public policy information portal that aims to measure the impact of COVID on various countries and its effect on economic and environmental terms. The countries that are able to contain COVID while keeping their economy afloat with minimal impact to the environment stand the best chance of sustainably bouncing back after this crisis.

![Data Value Chain](https://github.com/docligot/gqueers_space_apps/blob/master/Screenshots/Data%20Value%20Chain.png?raw=true)

## How it Works

Newsfeeds, Google Mobility data, and COVID cases show the multi-dimensional impact of government-mandated lockdowns and other interventions on their societies. Not all governments applied lockdowns, and no two lockdowns were implemented the same way.

![logframe](https://github.com/docligot/gqueers_space_apps/blob/master/Screenshots/Gideon%20Process%20Flow.png?raw=true)

EO night lights and NO2 levels can nowcast the current impact, and forecast the likely outcome, of lockdowns on nations’ economies. No country can survive a permanent lockdown, and eventually, governments will have to ease their restrictions.

* Satellite spectral data is downloaded from World View Earth Data on the NASA site for VIIRS data on night lights, and from Google Earth Engine for Sentinel-5p data on NO2;
* Spectral data is color extracted and converted into CSV to generate indices on night light and NO2 in target countries;
* Economic data on GDP is taken from various sources;
GDP is modeled on night light and NO2 data.

![process](https://github.com/docligot/gqueers_space_apps/blob/master/Screenshots/Satellite%20Process.png?raw=true)

Finally, various levels of human activity affect pollution levels around the world and it is possible to detect from EO which countries are keeping air quality under control as they bounce back from lockdown.

* Human mobility raw datasets were taken from Google Mobility Report;
* COVID-19 global infection data is taken from Johns Hopkins University;
* NO2 data is taken from Sentinel-5p datasets;

![Spectral1](https://github.com/docligot/gqueers_space_apps/blob/master/Screenshots/SG%20-%20NO2%20-%20200101%20to%20200201.png?raw=true)

![Spectral2](https://github.com/docligot/gqueers_space_apps/blob/master/Screenshots/SG%20-%20NO2%20-%20200202%20to%20200208.png?raw=true)

![Spectral3](https://github.com/docligot/gqueers_space_apps/blob/master/Screenshots/SG%20-%20NO2%20-%20200207%20to%20200217.png?raw=true)

## Insights

We assessed 5 countries and ranked them as follows:

* JP - Low: Relatively high mobility has not translated into significant GDP growth. COVID infection rates remain low.
* SG - Low: Severe immobility of the population has resulted in modest GDP growth. Infection rates however are very high.
* PH - Moderate: Moderately-High immobility due to strict lockdown measures still translate into relatively high GDP growth and very low growth rates in infections.
* SW - Moderate-High: Very high mobility due to the absence of lockdown measures have resulted in low GDP growth and moderately high infection rates.
* IT - High: Moderate mobility translates to very good prospects for GDP growth and very low infection rates. Italy however suffers from a very large infected population.

Overall we feel that Singapore and Japan seem to be an ideal template to follow as they have contained COVID cases while restarting their economy with the least damage to the environment.

## Impact

One constant challenge of economic data is its lagging nature. Meanwhile, Earth observations are a constant stream of insights available in real-time, and our goal with GIDEON is to show how public policymakers and economic planners can utilize satellite observation and mobility datasets to steer countries towards a sustainable future.

## How We Developed This Project
Team GIDEON wanted a multifaceted approach that can help decision makers to make the necessary inter-agency economic corrections to their respective countries. Our GDP nowcasting tool hails from data sources that are updated more frequently than traditional GDP indicators. We used VIIRS night light and Sentinel-5P Offline Nitrogen Dioxide for satellite image data then interspersed it with historical GDP of countries from Trading Economics, Google's mobility data of people in various areas (we focused on residential in particular), and covid-19 growth.

## Project Demo
* [5-slide presentation](https://raw.githubusercontent.com/docligot/gqueers_space_apps/master/5-slide-requirement_GIDEON.pptx)
* [Our Website](https://opendata.org.ph/projectgideon)

## Screenshots



## Data & Resources
* Suomi NPP/VIIRS Nighttime Imagery from https://worldview.earthdata.nasa.gov/
* Sentinel 5P Offline Nitrogen Dioxide https://developers.google.com/earth-engine/datasets/catalog/COPERNICUS_S5P_OFFL_L3_NO2
* GDP from Trading Economics https://tradingeconomics.com/country-list/gdp-growth-rate
* [Map] Satellite Imagery of MODIS thermal hotspots from ArcGIS Online
* [Map] AirNow Air Quality Monitoring Site Data from ArcGIS Online
* [Map] AirPollutant Concentration Data from ArcGIS Online
* Google's Mobility Data during Global Lockdowns https://www.google.com/covid19/mobility/
* Covid-19 Cases and Growth Rate from John Hopkins University and CoronaTracker.com

## Literature

* [Paper](https://www.researchgate.net/publication/332974696_VIIRS_Nighttime_Lights_in_the_Estimation_of_Cross-Sectional_and_Time-Series_GDP) Chen, Xi & Nordhaus, William. (2019). VIIRS Nighttime Lights in the Estimation of Cross-Sectional and Time-Series GDP. Remote Sensing. 11. 1057. 10.3390/rs11091057.
Xiuying Zhang, Wuting Zhang, Xuehe Lu, Xuejun Liu, Dongmei Chen, Lei Liu, Xianjin Huang,
* [Paper](https://doi.org/10.1016/j.scitotenv.2018.04.435.) "Long-term trends in NO2 columns related to economic developments and air quality policies from 1997 to 2016 in China", Science of The Total Environment, Volume 639, 2018, Pages 146-155,ISSN 0048-9697, 
* [Paper](https://doi.org/10.1016/j.atmosenv.2007.09.042) Bernardo Beckerman, Michael Jerrett, Jeffrey R Brook, Dave K Verma, Muhammad A Arain, Murray M Finkelstein, Correlation of nitrogen dioxide with other traffic pollutants near a major expressway, Atmospheric Environment, Volume 42, Issue 2, 2008, Pages 275-290, ISSN 1352-2310
* [Paper](https://doi.org/10.1016/j.scitotenv.2015.11.113.) Jianhui Jiang, Jianying Zhang, Yangwei Zhang, Chunlong Zhang, Guangming Tian, Estimating nitrogen oxides emissions at city scale in China with a nightlight remote sensing model, Science of The Total Environment, Volume 544, 2016, Pages 1119-1127, ISSN 0048-9697
* [Paper](https://doi.org/10.1016/j.scitotenv.2020.138820.) Sulaman Muhammad, Xingle Long, Muhammad Salman, COVID-19 pandemic and environmental pollution: A blessing in disguise?, Science of The Total Environment Volume 728, 2020, 138820, ISSN 0048-9697, 
* [Paper](https://doi.org/10.1016/j.atmosenv.2014.03.046.) Mar Viana, Pieter Hammingh, Augustin Colette, Xavier Querol, Bart Degraeuwe, Ina de Vlieger, John van Aardenne, Impact of maritime transport emissions on coastal air quality in Europe, Atmospheric Environment, Volume 90, 2014, Pages 96-105, ISSN 1352-2310, 


## Who We Are

Team GIDEON consists of:

* Nick Tobia
* Helen Barrameda
* Tessa Tan
* Kristel Zapata
* Oscar Castelo

## License

This work is provided under the terms of Creative Commons Attribution 4.0 International ([CC-BY-4.0](https://creativecommons.org/licenses/by/4.0/)) license.

## Tags

#economic #mobility #gideon #nitrogendioxide #integratedassessment
