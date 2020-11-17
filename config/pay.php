<?php

return [
    'alipay' => [
        'app_id'         => '2016110200785836',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApZU3dcqf7DXuhpMiecthykOzMUWdT/iXp647b+fX+iC3LrH5N3KXEwPJvCoImMp95UqmvhDiL1z0IV/RjBGe4GOkB8Dw9m5byyM1W3/qi7BYN9BIylduPp7HGERredE9l3vLlvIH3zOGG2sIkUKTeUQjM9TSXhhAxaBG0/EY68+ilrARwDrN8L0lCIBRiWB9SYaW6YJ52ZoyeTZ1zeOMtaB2UvTR+Y8YpCVNWyJCU6Y/iu/drTfo0z2uPCOLahF/MLUUn5Ay/otKQKPISFBtzgQx1tCVJSMfEbmtkortKhhSAkWbfIHM0wSPAX90K+LampbCh883+3owsKBiWsT+hQIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEArrAeZSQcLmUeho9MlkLqzBeWQl720AUkhnalTmS4eY3xK+wZRz3KzJjpk9Yuq1GLlIMXqq8St7y3boFfSRmYpXwdSb3Dhl3fdjp49pqjUvv+Z7HKlFFjVnydswYUiM2cy7On/4hcb8g+SZtte0e9ZG0rSjxBPTlPMZph0bJ57jgTDCn+IFMl+RxqEvBC4YZO2rML+CERUXoJIuhJV0ofirx5yGUgTouqIjYfyp80iVa0wT54DGhBikCvvbGnrtyav5oe1oWi0+M6bh32nYZCycHcvWRL6NpJjrIjGPjp908AqPEfPzEH/r0Fpo8AfvajcVWKPzNvMvuMbudSAmQYxQIDAQABAoIBAQCliY/EGGv8Kya6LKFO4yrNLKzfSE5q4fSy10ve9eM6jR+1l458zDmZmG4AAj9HaYbzvSZ4QF9kbhkFRuOcyfy1FOBMON9IPTy9NLvcNL4ArXtvmDN4SYfxNTXbqC9dVDr5bc4NgJLX+tHLvtYItPrsZ+dV+bN46Q3622lG5fJVoohfNTk7RVIgbzaz0BH9TGl5u8CRU6gyI78pTSNDpNZZJBd4f+AS1viKdhdAaGUVyBufJd0fKBHxsUPFJp+hgBTWqni0Tq81gRdnC+jQzoBVK55EYk3ix8E3enSR5FyNRy6pAy12kKEjlsYpeBY4p4gX5WR0nG1zlKDyF+2Wc2cBAoGBAPWe+Ya21vV3B9xIZwJh6rCDzOYew+lMuVLRPkuG7EyY007fGaqhtw2ff8MqSMIyusEtpFqvwBLdB/7L9krbqvVdpN9tfSyJytrgEnE1jMIL0Ag4FGWv3RjHZo6DXSlYaAeg1Ja2nJgbejR9Ubg9toGcXDviaqwWrlfzR/xleBDtAoGBALYR0fPl4U65aPp4fpwFND2ooJcJuUEwZeNpIDpbO2NLGnczdm0fdllt+boF8OvEVcVQIAQ2ezJ+pRBaZA2MQv+tveo8YoHyLWzggbYHF1ejN4/tv2r/8tovKE+17AZTw+9eXx68fk+NjeX38jHtKyfee0iEazslhswM2Wh7gyQ5AoGAN/VvHfz7/lKPDOXF6ioKwQpWHTt3IOjk8/ROAAEORukugzKa82ACh20GO52fk/bgy3AtmKef1+xZjPhE9YsUaPBbxrd4JDSEbddM/FPZ7L+qNqUoKH6nnaSYPfG5wNiuYsaGiIu0I4dnERxYCOSudtr7vHz6FpjYQZtglCU99IUCgYBaCqgVgbuSbll/fXXH/T7fu3RoHdPzbFcHR2c71QCi03KsPtQzlVq3UY8uM1/5iWiNo1miG7uDtmQ1mS5gENzVi3wfymtBLp7OeJ1Ng2ZE3iBNWtvOs/PLeYTrHuIyIt0ElVxfXALvnubtM1kg3dT466t2qp5Jav6mDTi71lF96QKBgQCPaby/AFfBmdfHdoVQiSkVQbD040h3hNAkWsW2H2+CNdoMG/d+um8+l/gsCcroiJybJ7BssJYStiy4l+hy6QHhhnK05tyQD3Xzf5dAQDxCianez4kc1M0oOgmC7Y3j6PQwaNVxgsbQIP2pXO10uakaxLb++cj8+Ty+NuvRefgbbQ==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
