[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Ipapi/functions?utm_source=RapidAPIGitHub_IpapiFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Ipapi Package
Look up IP addresses by geographical location.
* Domain: ipapi.co
* Credentials: 

## How to get credentials: 
0. Free version does not require any credentials

## Ipapi.getIPAddressLocation
This endpoint retrieves location for the IP address specified

| Field    | Type  | Description
|----------|-------|----------
| ipAddress| String| IP address

## Ipapi.getMyIPAddressLocation
This endpoint retrieves location for your IP address.

No arguments.

## Ipapi.getSingleInfoForIP
This endpoint retrieves a specific location field for the IP address provided in the URL.

| Field    | Type  | Description
|----------|-------|----------
| ipAddress| String| IP address
| fieldName| String| Possible values: ip, city, region, country, postal, latitude, longitude, timezone, latlong

## Ipapi.getSingleInfoForMyIP
This endpoint retrieves a specific location field for your IP address.

| Field    | Type  | Description
|----------|-------|----------
| fieldName| String| Possible values: ip, city, region, country, postal, latitude, longitude, timezone, latlong

