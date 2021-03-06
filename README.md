----------
#xsolve-pl/salesforce-client [![Build Status][travis_img]][travis_url] [![Scrutinizer Code Quality][scrutinizer_img]][scrutinizer_url] [![Code Coverage][code_coverage_img]][code_coverage_url]
[travis_img]: https://travis-ci.com/xsolve-pl/salesforce-client.svg?token=SjQKyns8C8K1pNxxqcyw&branch=master
[travis_url]: https://travis-ci.com/xsolve-pl/salesforce-client
[scrutinizer_img]: https://scrutinizer-ci.com/g/xsolve-pl/salesforce-client/badges/quality-score.png?b=master
[scrutinizer_url]: https://scrutinizer-ci.com/g/xsolve-pl/salesforce-client/?branch=master
[code_coverage_img]: https://scrutinizer-ci.com/g/xsolve-pl/salesforce-client/badges/coverage.png?b=master
[code_coverage_url]: https://scrutinizer-ci.com/g/xsolve-pl/salesforce-client/?branch=master

## Introduction
This library is for integration with Salesforce via REST API.

## Licence
This library is under the MIT license. See the complete license in [LICENSE](LICENSE) file.

## Getting started

Add the library to your project using Composer as follows:
```
$ composer require xsolve-pl/salesforce-client
```

Guzzle and Redis are not required by default to keep your project clean. If you wish to use them, please install suggested dependencies:
```
$ composer require guzzlehttp/guzzle "~6.2"
$ composer require blablacar/redis-client "~1.0"
```
Otherwise you must implement your own logic to handle HTTP requests, but for token storage you can use `RequestTokenStorage` (this will keep the token in own property (memory) so the token would last until the script is terminated (e.g. current request), which is not really effective).

## Documentation
Documentation is available in the doc directory.
[Read documentation](doc/README.md)
