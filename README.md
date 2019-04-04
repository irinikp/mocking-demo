# Automated Testing - Mocking

This is the code of the demo files presented [here](https://irinikp.com/mocking-presentation). 
If you wish to recreate the tests yourself and play around, follow the steps below:

## Getting Started

### Prerequisites

Make sure you have [PHP](https://www.php.net/manual/en/install.php)

```
$ php -v
```

[Composer](https://getcomposer.org/download/) 

```
$ composer --version
```

and [Git](https://www.atlassian.com/git/tutorials/install-git) installed

```
$ git --version
```

### Installing

1. Clone this repository

```
$ git clone https://github.com/irinikp/mocking-demo.git
```

2. Navigate to the demo folder

```
$ cd mocking-demo
```

3. If you don't wish to test the Cat-Api-Demo, skip steps 4-6

4. Create a copy of the `env.example.php` file and name it `env.php` 

5. Sign-up in [thecatapi](https://thecatapi.com/)

6. Copy your API Key from the email you received and paste it in the `env.php` file, replacing the `PUT-YOUR-CAT-API-KEY-HERE` with it. 

7. Install composer

```
$ composer install
```

## Running the tests

### Simple Mocking Test

Edit files `demo/Alpha.php`, `demo/Beta.php` and `tests/TestAlpha.php` to see different functionalities of the [Mockery framework](http://docs.mockery.io/en/latest/reference/index.html).

To run the test, simply do:

```
$ phpunit tests/TestAlpha.php
```

### Cat-Api-Demo Test

To run the test, simply do:

```
$ phpunit tests/TestCats.php
```
 
## Folder Structure

- **data/** Sample json files
- **demo/** Class files

    - `Alpha.php` and `Beta.php` are the class file of the simple mocking test. 
    - `ImageController.php` is the Controller of the-cat-api project
    - `CatImage.php` is the Model of the-cat-api project
    - `CatApiIntegrator.php` is the API wrapper of the-cat-api project
    - `Assigner.php` is a helper class

- **tests/** Test files

## Further Information

For more information on what to do, please check out the presentation accompanying this files: [mocking-presentation](https://irinikp.com/mocking-presentation)