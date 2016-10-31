### 缘由
按理说rsa用public key加密不应该用no padding模式，这样一个密码加密出来只有一种结果，很不安全。
但是碰到一个很坑的项目，第三方给的java代码加密示范用的org.bouncycastle.jce.provider.BouncyCastleProvider这个包，默认rsa加密模式是RSA/None/NoPadding。
要让php实现同样的加密，怎么办？

首先用给的modulus和exponent生成public key的pem文件
可以用phpseclib1或直接`命令行`生成。

### 命令行生成pem文件方法

创建一个asn1文件

```
# Start with a SEQUENCE
asn1=SEQUENCE:pubkeyinfo

# pubkeyinfo contains an algorithm identifier and the public key wrapped
# in a BIT STRING
[pubkeyinfo]
algorithm=SEQUENCE:rsa_alg
pubkey=BITWRAP,SEQUENCE:rsapubkey

# algorithm ID for RSA is just an OID and a NULL
[rsa_alg]
algorithm=OID:rsaEncryption
parameter=NULL

# Actual public key: modulus and exponent
[rsapubkey]
n=INTEGER:0x%%MODULUS%%

e=INTEGER:0x%%EXPONENT%%
```

openssl asn1parse -genconf def.asn1 -out pubkey.der -noout

openssl rsa -in pubkey.der -inform der -pubin -out pubkey.pem


### php用public key加密

```php
    public function rsaEncode($string)
    {
        $sign = '';
        $string = str_pad($string, 128, "\0", STR_PAD_LEFT);
        $publicKey = file_get_contents('/Users/xjz/pubkey.pem');
        $publicKey = openssl_get_publickey($publicKey);
        //$detail = openssl_pkey_get_details($publicKey);
        //ld(bin2hex($detail['rsa']['n']), bin2hex($detail['rsa']['e']));
        $result = openssl_public_encrypt($string, $sign, $publicKey, OPENSSL_NO_PADDING);
        return bin2hex($sign);
    }
```

php的no padding方式加密对被加密字符串的大小有要求。
`openssl_pkey_get_details`是用于检查生成的public key是否正确。

参考：

* [http://stackoverflow.com/questions/11541192/creating-a-rsa-public-key-from-its-modulus-and-exponent](http://stackoverflow.com/questions/11541192/creating-a-rsa-public-key-from-its-modulus-and-exponent)
