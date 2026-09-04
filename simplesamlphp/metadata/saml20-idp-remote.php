<?php

/**
 * Auth0 SAML IdP metadata for SimpleSAMLphp.
 */

$metadata['urn:dev-6xu0s3t43xer76kc.us.auth0.com'] = [

    'entityid' => 'urn:dev-6xu0s3t43xer76kc.us.auth0.com',
    'metadata-set' => 'saml20-idp-remote',

    'SingleSignOnService' => [
        [
            'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://dev-6xu0s3t43xer76kc.us.auth0.com/samlp/OzeEfjrJAiiU2EIEOYtjaAc1HQx0bi2f',
        ],
        [
            'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://dev-6xu0s3t43xer76kc.us.auth0.com/samlp/OzeEfjrJAiiU2EIEOYtjaAc1HQx0bi2f',
        ],
    ],

    'SingleLogoutService' => [
        [
            'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://dev-6xu0s3t43xer76kc.us.auth0.com/samlp/OzeEfjrJAiiU2EIEOYtjaAc1HQx0bi2f/logout',
        ],
        [
            'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://dev-6xu0s3t43xer76kc.us.auth0.com/samlp/OzeEfjrJAiiU2EIEOYtjaAc1HQx0bi2f/logout',
        ],
    ],

    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    ],

    'keys' => [
        [
            'signing'          => true,
            'encryption'       => false,
            'type'             => 'X509Certificate',
            'X509Certificate'  => 'MIIDHTCCAgWgAwIBAgIJWStEFXp/GbJVMA0GCSqGSIb3DQEBCwUAMCwxKjAoBgNVBAMTIWRldi02eHUwczN0NDN4ZXI3NmtjLnVzLmF1dGgwLmNvbTAeFw0yNDEwMzAyMDEyMjJaFw0zODA3MDkyMDEyMjJaMCwxKjAoBgNVBAMTIWRldi02eHUwczN0NDN4ZXI3NmtjLnVzLmF1dGgwLmNvbTCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAKWu/YvCsxda1BtL6Bu+737UY7FmxWcrh6fb98o7v4XmQoX8gsXogMm2WUGoG3VNkzazcDTHwSreZZCmZlrsLw/0sn5McM+Wrv5fHxXbWxW7CpizbMx1Pk149fWAjEBST91pQ0k5IecdHQ+U9jDm7U5t1/hy2FxJ1ckQSADjIKqMneBSTgQ936XBAQG0A5BUDa9pH0oQPILE+U4hczJZ/OquAUM6PKZgp4izf/G3I9JISFd20niWoQ0tbTB1jZwc01Bqmc04Li/CjowYLKWkMtTw7gPnlwLHPyQYJ/toeLS62klytWAdr70AUoPkIfJq4FWBPEk3tK0s6ja2081yzdcCAwEAAaNCMEAwDwYDVR0TAQH/BAUwAwEB/zAdBgNVHQ4EFgQUUvoPm1HjXslDTSWIs3jBp4rh8WIwDgYDVR0PAQH/BAQDAgKEMA0GCSqGSIb3DQEBCwUAA4IBAQClXp+o6lUjzqV0nnvx7rzX2PQy5cc7iT5d3xN3cTMN2kcCZSVJ8O/Y2xhv5g6FF+hmALe+GgVUyQLmZqSGsDOObL1AfUihMzYmLcekkY4FiCIw8fQjFsD/34m4frz/oYjHB+6J96hyjKhlAC95xzGhg0y2XkB+g8bcg1XqKpfTPNMrzp2H9nVBRwggBbYkZ3j6AZh0k7B9vqL9y+zE54BPWQLC3zkmvXR5shWoMySiF6Q2sfjWik29f+mI4LhuPDinZS5OpbZUkNG8S/tCiRGLY+qOo5GS/BkC7TPd7XXnLfBRiWmfdXwI9aDR0HsHvuvyI3TFJJ/ZUTznIS77zYVB',
        ],
    ],

];

/**
 * Microsoft Entra ID (Azure AD) SAML IdP metadata for SimpleSAMLphp.
 */

$metadata['https://sts.windows.net/0f4f143b-570a-4c60-aa54-96f1d9d3fe2e/'] = [

    'entityid' => 'https://sts.windows.net/0f4f143b-570a-4c60-aa54-96f1d9d3fe2e/',
    'metadata-set' => 'saml20-idp-remote',

    'SingleSignOnService' => [
        [
            'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/0f4f143b-570a-4c60-aa54-96f1d9d3fe2e/saml2',
        ],
        [
            'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
            'Location' => 'https://login.microsoftonline.com/0f4f143b-570a-4c60-aa54-96f1d9d3fe2e/saml2',
        ],
    ],

    'SingleLogoutService' => [
        [
            'Binding'  => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
            'Location' => 'https://login.microsoftonline.com/0f4f143b-570a-4c60-aa54-96f1d9d3fe2e/saml2',
        ],
    ],

    'NameIDFormats' => [
        'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
    ],

    'keys' => [
        [
            'signing'          => true,
            'encryption'       => false,
            'type'             => 'X509Certificate',
            'X509Certificate'  => 'MIIC8DCCAdigAwIBAgIQZkIx6Q+AaZ5AB+MH7zFKRjANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yNjA5MDMwNjU4MTRaFw0yOTA5MDMwNjU4MTRaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApTIDMlCHQoqvMPfLIY1fw0hAtXcRYVGgDX4S8F0Ue7kH/6E0pYgBXSOL72TnJ/niUO/1IBMIIV5k0KJX+3RVmCduD6tEtTnB4r7vp/Fs3Mde/jlvF0x2dz83A2VWqa+8zP73fJpsA5NciDVKltOJLOR4sEUpHivEck2oiznc9kAuaS7IAIqgQQr+NCqXvxaKfPUYAl7uvTK7vGvEUfVS2WYc31IwH+IlDtnAWQVj/7+W/1c/uvNOgDVNHawtaJvLdbSecl6LDfpcG5z8r9eKdo34xTtn7NraO9heftRv36kqqn4yYwEsBRaxczE2rVGvAQ6UANFmlDxdbxGqgZEvOQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQBTT59/W6q3VQEzXzy6+a54wPwmjE1QYELHGeurXd72h5Gaz9hP3FyobE556+dP0QzfIcVlM5Smbyp/rilc0BqQS4UZ/ot16E1EZyyVpetr3ZH5xr8ksYAGJ1KQya0vMgk2uzayd4Be0/VIf9utexuSzG66/5wKHJ0XVUfpf6ENGWPgNx8JWkDjirEHbMiyT/4+ONxK6F1IBj1iBhvSh0QBfrqcyDVPFUnoyOVq6S4D/FCDT38E4SZ5PJCHyeMbsfB4ZNBEMS1GpkZalRp0NLp8J95xYRMqM5l/iNN+T6wWlqScMoUSdQsf38ivKWHQ4ORJDjvhqvksN8UBfyo2IxkG',
        ],
    ],

];
