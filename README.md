# Hashing (Folding by Boundary)
This php function is made for getting an address for a key using *Folding by Boundary* method.

## Getting Started
To get/use this project you can simply just use `Clone or download`. The function code should be in `index.php` file.

### Initial Configuration
To run/use the function just call the function `foldingByBoundary(key, address allocation)` with `key` is the key and `address allocation` is the max total address.

***Example***
```
 echo foldingByBoundary(123456789, 1000);
```

### Limitation
This function still isn't perfect, with the limitation of `key` that need to be integer/number and the `address` needs to be *trailing zero* number (10, 100, 1000). With that in mind the function should work as it intended.

# About
## Built With

* [Visual Studio Code](https://code.visualstudio.com/) - Editor

## Authors
* **Rizky Sedyanto** - *Initial work* - [ln2r](https://ln2r.web.id/); [Discord](https://discordapp.com/): ln2r#1691

## Acknowledgments
* Universitas Komputer Indonesia Bandung - SisberUl-2
