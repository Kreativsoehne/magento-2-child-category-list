# magento-2-child-category-list

An extension for listing a parent categorie's child categories with their category image.

## Installation
1. $ composer require kreativsoehne/magento-2-child-category-list
2. $ ./bin/magento module:enable Kreativsoehne_ChildCategoryList
3. $ ./bin/magento setup:upgrade
4. $ ./bin/magento setup:di:compile
5. Profit.

## Usage

Just install the Extension. After installation, product lists will contain a list of all their child categories. When there's no child category the module will not display anything.

## Making changes

The module uses a block for displaying it's contents. You can handle it as usual in layout XML.

block name: category.childcategorylist

## Notice

This extension is very basic. There's nothing to setup and there are no settings to make. If you'd like to make changes, you can fork it and do whatever you want to do.