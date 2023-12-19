<?php

	$receipt = 'MIIT6QYJKoZIhvcNAQcCoIIT2jCCE9YCAQExCzAJBgUrDgMCGgUAMIIDigYJKoZIhvcNAQcBoIIDewSCA3cxggNzMAoCAQgCAQEEAhYAMAoCARQCAQEEAgwAMAsCAQECAQEEAwIBADALAgELAgEBBAMCAQAwCwIBDwIBAQQDAgEAMAsCARACAQEEAwIBADALAgEZAgEBBAMCAQMwDAIBCgIBAQQEFgI0KzAMAgEOAgEBBAQCAgCMMA0CAQ0CAQEEBQIDAf6MMA0CARMCAQEEBQwDMS4wMA4CAQkCAQEEBgIEUDI1NTAPAgEDAgEBBAcMBTAuMC42MBUCAQICAQEEDQwLY29tLlRlYU0uQU0wGAIBBAIBAgQQy7GdlNmLOErslNimxdcoKTAbAgEAAgEBBBMMEVByb2R1Y3Rpb25TYW5kYm94MBwCAQUCAQEEFE5tej7HxowsZdAl6EU4pEpjHFkJMB4CAQwCAQEEFhYUMjAyMC0wOS0xNlQwMjo1MzozMVowHgIBEgIBAQQWFhQyMDEzLTA4LTAxVDA3OjAwOjAwWjBQAgEHAgEBBEhvZbiQ99fEcysKXGkp%2br%2bgDlwUCP1BDb40em8TUFy7V7iasSZVMbA63%2fKBb%2br%2fsB2TJMQAK0je2ms7qJLDrKll8IRGq7fVTGMwXQIBBgIBAQRVrCDUEVWNDD5xfvpiP4CTLejxMND1cEYC86X0kwqJy9LlKdqHXEOYxEuTggRTqR%2bV6B8PFIvv77CyL6xE4b8RbJABqBlss9%2bL728tTZ0qg9ZfcRAeGTCCAV4CARECAQEEggFUMYIBUDALAgIGrAIBAQQCFgAwCwICBq0CAQEEAgwAMAsCAgawAgEBBAIWADALAgIGsgIBAQQCDAAwCwICBrMCAQEEAgwAMAsCAga0AgEBBAIMADALAgIGtQIBAQQCDAAwCwICBrYCAQEEAgwAMAwCAgalAgEBBAMCAQEwDAICBqsCAQEEAwIBATAMAgIGrgIBAQQDAgEAMAwCAgavAgEBBAMCAQAwDAICBrECAQEEAwIBADAbAgIGpwIBAQQSDBAxMDAwMDAwNzE4OTQyMzU4MBsCAgapAgEBBBIMEDEwMDAwMDA3MTg5NDIzNTgwHwICBqgCAQEEFhYUMjAyMC0wOS0xNlQwMjo1MzozMFowHwICBqoCAQEEFhYUMjAyMC0wOS0xNlQwMjo1MzozMFowJAICBqYCAQEEGwwZY29tLlRlYU0uQXZhdGFyTXVzaWsyLjIwTKCCDmUwggV8MIIEZKADAgECAggO61eH554JjTANBgkqhkiG9w0BAQUFADCBljELMAkGA1UEBhMCVVMxEzARBgNVBAoMCkFwcGxlIEluYy4xLDAqBgNVBAsMI0FwcGxlIFdvcmxkd2lkZSBEZXZlbG9wZXIgUmVsYXRpb25zMUQwQgYDVQQDDDtBcHBsZSBXb3JsZHdpZGUgRGV2ZWxvcGVyIFJlbGF0aW9ucyBDZXJ0aWZpY2F0aW9uIEF1dGhvcml0eTAeFw0xNTExMTMwMjE1MDlaFw0yMzAyMDcyMTQ4NDdaMIGJMTcwNQYDVQQDDC5NYWMgQXBwIFN0b3JlIGFuZCBpVHVuZXMgU3RvcmUgUmVjZWlwdCBTaWduaW5nMSwwKgYDVQQLDCNBcHBsZSBXb3JsZHdpZGUgRGV2ZWxvcGVyIFJlbGF0aW9uczETMBEGA1UECgwKQXBwbGUgSW5jLjELMAkGA1UEBhMCVVMwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQClz4H9JaKBW9aH7SPaMxyO4iPApcQmyz3Gn%2bxKDVWG%2f6QC15fKOVRtfX%2byVBidxCxScY5ke4LOibpJ1gjltIhxzz9bRi7GxB24A6lYogQ%2bIXjV27fQjhKNg0xbKmg3k8LyvR7E0qEMSlhSqxLj7d0fmBWQNS3CzBLKjUiB91h4VGvojDE2H0oGDEdU8zeQuLKSiX1fpIVK4cCc4Lqku4KXY%2fQrk8H9Pm%2fKwfU8qY9SGsAlCnYO3v6Z%2fv%2fCa%2fVbXqxzUUkIVonMQ5DMjoEC0KCXtlyxoWlph5AQaCYmObgdEHOwCl3Fc9DfdjvYLdmIHuPsB8%2fijtDT%2biZVge%2fiA0kjAgMBAAGjggHXMIIB0zA%2fBggrBgEFBQcBAQQzMDEwLwYIKwYBBQUHMAGGI2h0dHA6Ly9vY3NwLmFwcGxlLmNvbS9vY3NwMDMtd3dkcjA0MB0GA1UdDgQWBBSRpJz8xHa3n6CK9E31jzZd7SsEhTAMBgNVHRMBAf8EAjAAMB8GA1UdIwQYMBaAFIgnFwmpthhgi%2bzruvZHWcVSVKO3MIIBHgYDVR0gBIIBFTCCAREwggENBgoqhkiG92NkBQYBMIH%2bMIHDBggrBgEFBQcCAjCBtgyBs1JlbGlhbmNlIG9uIHRoaXMgY2VydGlmaWNhdGUgYnkgYW55IHBhcnR5IGFzc3VtZXMgYWNjZXB0YW5jZSBvZiB0aGUgdGhlbiBhcHBsaWNhYmxlIHN0YW5kYXJkIHRlcm1zIGFuZCBjb25kaXRpb25zIG9mIHVzZSwgY2VydGlmaWNhdGUgcG9saWN5IGFuZCBjZXJ0aWZpY2F0aW9uIHByYWN0aWNlIHN0YXRlbWVudHMuMDYGCCsGAQUFBwIBFipodHRwOi8vd3d3LmFwcGxlLmNvbS9jZXJ0aWZpY2F0ZWF1dGhvcml0eS8wDgYDVR0PAQH%2fBAQDAgeAMBAGCiqGSIb3Y2QGCwEEAgUAMA0GCSqGSIb3DQEBBQUAA4IBAQANphvTLj3jWysHbkKWbNPojEMwgl%2fgXNGNvr0PvRr8JZLbjIXDgFnf4%2bLXLgUUrA3btrj%2b%2fDUufMutF2uOfx%2fkd7mxZ5W0E16mGYZ2%2bFogledjjA9z%2fOjtxh%2bumfhlSFyg4Cg6wBA3LbmgBDkfc7nIBf3y3n8aKipuKwH8oCBc2et9J6Yz%2bPWY4L5E27FMZ%2fxuCk%2fJ4gao0pfzp45rUaJahHVl0RYEYuPBX%2fUIqc9o2ZIAycGMs%2fiNAGS6WGDAfK%2bPdcppuVsq1h1obphC9UynNxmbzDscehlD86Ntv0hgBgw2kivs3hi1EdotI9CO%2fKBpnBcbnoB7OUdFMGEvxxOoMIIEIjCCAwqgAwIBAgIIAd68xDltoBAwDQYJKoZIhvcNAQEFBQAwYjELMAkGA1UEBhMCVVMxEzARBgNVBAoTCkFwcGxlIEluYy4xJjAkBgNVBAsTHUFwcGxlIENlcnRpZmljYXRpb24gQXV0aG9yaXR5MRYwFAYDVQQDEw1BcHBsZSBSb290IENBMB4XDTEzMDIwNzIxNDg0N1oXDTIzMDIwNzIxNDg0N1owgZYxCzAJBgNVBAYTAlVTMRMwEQYDVQQKDApBcHBsZSBJbmMuMSwwKgYDVQQLDCNBcHBsZSBXb3JsZHdpZGUgRGV2ZWxvcGVyIFJlbGF0aW9uczFEMEIGA1UEAww7QXBwbGUgV29ybGR3aWRlIERldmVsb3BlciBSZWxhdGlvbnMgQ2VydGlmaWNhdGlvbiBBdXRob3JpdHkwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDKOFSmy1aqyCQ5SOmM7uxfuH8mkbw0U3rOfGOAYXdkXqUHI7Y5%2flAtFVZYcC1%2bxG7BSoU%2bL%2fDehBqhV8mvexj%2favoVEkkVCBmsqtsqMu2WY2hSFT2Miuy%2faxiV4AOsAX2XBWfODoWVN2rtCbauZ81RZJ%2fGXNG8V25nNYB2NqSHgW44j9grFU57Jdhav06DwY3Sk9UacbVgnJ0zTlX5ElgMhrgWDcHld0WNUEi6Ky3klIXh6MSdxmilsKP8Z35wugJZS3dCkTm59c3hTO%2fAO0iMpuUhXf1qarunFjVg0uat80YpyejDi%2bl5wGphZxWy8P3laLxiX27Pmd3vG2P%2bkmWrAgMBAAGjgaYwgaMwHQYDVR0OBBYEFIgnFwmpthhgi%2bzruvZHWcVSVKO3MA8GA1UdEwEB%2fwQFMAMBAf8wHwYDVR0jBBgwFoAUK9BpR5R2Cf70a40uQKb3R01%2fCF4wLgYDVR0fBCcwJTAjoCGgH4YdaHR0cDovL2NybC5hcHBsZS5jb20vcm9vdC5jcmwwDgYDVR0PAQH%2fBAQDAgGGMBAGCiqGSIb3Y2QGAgEEAgUAMA0GCSqGSIb3DQEBBQUAA4IBAQBPz%2b9Zviz1smwvj%2b4ThzLoBTWobot9yWkMudkXvHcs1Gfi%2fZptOllc34MBvbKuKmFysa%2fNw0Uwj6ODDc4dR7Txk4qjdJukw5hyhzs%2br0ULklS5MruQGFNrCk4QttkdUGwhgAqJTleMa1s8Pab93vcNIx0LSiaHP7qRkkykGRIZbVf1eliHe2iK5IaMSuviSRSqpd1VAKmuu0swruGgsbwpgOYJd%2bW%2bNKIByn%2fc4grmO7i77LpilfMFY0GCzQ87HUyVpNur%2bcmV6U%2fkTecmmYHpvPm0KdIBembhLoz2IYrF%2bHjhga6%2f05Cdqa3zr%2f04GpZnMBxRpVzscYqCtGwPDBUfMIIEuzCCA6OgAwIBAgIBAjANBgkqhkiG9w0BAQUFADBiMQswCQYDVQQGEwJVUzETMBEGA1UEChMKQXBwbGUgSW5jLjEmMCQGA1UECxMdQXBwbGUgQ2VydGlmaWNhdGlvbiBBdXRob3JpdHkxFjAUBgNVBAMTDUFwcGxlIFJvb3QgQ0EwHhcNMDYwNDI1MjE0MDM2WhcNMzUwMjA5MjE0MDM2WjBiMQswCQYDVQQGEwJVUzETMBEGA1UEChMKQXBwbGUgSW5jLjEmMCQGA1UECxMdQXBwbGUgQ2VydGlmaWNhdGlvbiBBdXRob3JpdHkxFjAUBgNVBAMTDUFwcGxlIFJvb3QgQ0EwggEiMA0GCSqGSIb3DQEBAQUAA4IBDwAwggEKAoIBAQDkkakJH5HbHkdQ6wXtXnmELes2oldMVeyLGYne%2bUts9QerIjAC6Bg%2b%2bFAJ039BqJj50cpmnCRrEdCju%2bQbKsMflZ56DKRHi1vUFjczy8QPTc4UadHJGXL1XQ7Vf1%2bb8iUDulWPTV0N8WQ1IxVLFVkds5T39pyez1C6wVhQZ48ItCD3y6wsIG9wtj8BMIy3Q88PnT3zK0koGsj%2bzrW5DtleHNbLPbU6rfQPDgCSC7EhFi501TwN22IWq6NxkkdTVcGvL0Gz%2bPvjcM3mo0xFfh9Ma1CWQYnEdGILEINBhzOKgbEwWOxaBDKMaLOPHd5lc%2f9nXmW8Sdh2nzMUZaF3lMktAgMBAAGjggF6MIIBdjAOBgNVHQ8BAf8EBAMCAQYwDwYDVR0TAQH%2fBAUwAwEB%2fzAdBgNVHQ4EFgQUK9BpR5R2Cf70a40uQKb3R01%2fCF4wHwYDVR0jBBgwFoAUK9BpR5R2Cf70a40uQKb3R01%2fCF4wggERBgNVHSAEggEIMIIBBDCCAQAGCSqGSIb3Y2QFATCB8jAqBggrBgEFBQcCARYeaHR0cHM6Ly93d3cuYXBwbGUuY29tL2FwcGxlY2EvMIHDBggrBgEFBQcCAjCBthqBs1JlbGlhbmNlIG9uIHRoaXMgY2VydGlmaWNhdGUgYnkgYW55IHBhcnR5IGFzc3VtZXMgYWNjZXB0YW5jZSBvZiB0aGUgdGhlbiBhcHBsaWNhYmxlIHN0YW5kYXJkIHRlcm1zIGFuZCBjb25kaXRpb25zIG9mIHVzZSwgY2VydGlmaWNhdGUgcG9saWN5IGFuZCBjZXJ0aWZpY2F0aW9uIHByYWN0aWNlIHN0YXRlbWVudHMuMA0GCSqGSIb3DQEBBQUAA4IBAQBcNplMLXi37Yyb3PN3m%2fJ20ncwT8EfhYOFG5k9RzfyqZtAjizUsZAS2L70c5vu0mQPy3lPNNiiPvl4%2f2vIB%2bx9OYOLUyDTOMSxv5pPCmv%2fK%2fxZpwUJfBdAVhEedNO3iyM7R6PVbyTi69G3cN8PReEnyvFteO3ntRcXqNx%2bIjXKJdXZD9Zr1KIkIxH3oayPc4FgxhtbCS%2bSsvhESPBgOJ4V9T0mZyCKM2r3DYLP3uujL%2flTaltkwGMzd%2fc6ByxW69oPIQ7aunMZT7XZNn%2fBh1XZp5m5MkL72NVxnn6hUrcbvZNCJBIqxw8dtk2cXmPIS4AXUKqK1drk%2fNAJBzewdXUhMYIByzCCAccCAQEwgaMwgZYxCzAJBgNVBAYTAlVTMRMwEQYDVQQKDApBcHBsZSBJbmMuMSwwKgYDVQQLDCNBcHBsZSBXb3JsZHdpZGUgRGV2ZWxvcGVyIFJlbGF0aW9uczFEMEIGA1UEAww7QXBwbGUgV29ybGR3aWRlIERldmVsb3BlciBSZWxhdGlvbnMgQ2VydGlmaWNhdGlvbiBBdXRob3JpdHkCCA7rV4fnngmNMAkGBSsOAwIaBQAwDQYJKoZIhvcNAQEBBQAEggEAQ1uPomOEyroQnVVTxN7MZ4nd4PTg6FAPVmlyToLF8p4RFY6fjbK3TVz4nNDPni93HAA%2fKqa6jLQZTs5ps25O7j%2bb2luLUDxABFNFFWQ8Eg0q%2fL9Y8mfRWbtAnbHoJpFWF8lcEG8nFk2mWveoLF0dCkE6%2f9t0qJXK%2fZ3EoqaIXdv%2bl3um4reiXvvhdiwBRbVgjr5fxTT%2flUT0KIvbhdRVPUY5dB1dKYA0ytci%2bGj3YQyEjTicxeBIi0SJ4SRVUPDPNPSrSoECo9v8y8yU8UDAM13D9tBifCbcok7C49qISYbK8XBBiB%2f58T8vrkzaYuf0NDuMfpYbe12pQx6oGxf6eQ%3d%3d';
  // echo $receipt;
  // echo base64_decode($receipt);
  // echo urldecode($receipt);
  // var_dump(strlen(base64_decode($receipt))) ;

  // $string = str_repeat('1234567890' . implode('', range('a', 'z')), 48800);

 // echo strlen($string); //1756800 bytes
// $s = bzcompress($receipt,9);

// $compressed = gzdeflate(urldecode($receipt),  9);
// $compressed = gzdeflate($compressed, 9);

// echo strlen($compressed); //99 bytes
// $str = "sample data";

// $bzstr1 = bzcompress($receipt, 9,0);
// $bzstr2 = bzcompress($bzstr1, 9,0);

// $bzstr3 = bzcompress($bzstr2, 9,0);

// $bzstr4 = bzcompress($bzstr3, 9,0);

 // echo strlen($str) ;
// echo strlen($bzstr4);
// echo gzinflate(gzinflate($compressed));
?>