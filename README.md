# concrete5 (Concrete CMS) 8.5.5 pacthes
By concrete5 Japan, Inc.

This is the collection of patches to fix the bugs of Concrete CMS 8.5.5

# Files to patch

Unless you have customization, simply update the following files to your Concrete CMS.

- application/bootstrap/app.php
- application/controllers/panel/sitemap.php
- application/config/app.php
- application/jobs/index_search.php
- application/js/app.js

# Instructions

- Check if your Concrete CMS site runs on version 8.5.5.
- Check if the Concrete CMS 8.5.5 site doesn't have any exisiting customization to above files
- If there is a conflict, apply the files accordingly. If there is no conflict, just upload and apply the patches.
- When you upgrade to newer version, check if the related pull request was merged into master and core function normally. If all the patches were included, remove these override patches during upgrade.

If you need some technical assistance, you can use our technical services. Please email us at info [at] concrete5.co.jp.

## 1. Draft Page Fix

This fixes the error that draft pages of Page Panel not showing under certain editors.

### Files to patch

- application/bootstrap/app.php
- application/controllers/panel/sitemap.php

### Related PR

https://github.com/concrete5/concrete5/pull/9489

## 2. Slow Search Index

Search Index - Update jobs tried to update all files, users and express.
However, this slows down the Concrete CMS resulted in time out or memory exhaustion error.
Hissy is suggesting to go back to the previous state which only updates page index.

###  Files to patch

- application/jobs/index_search.php

### Related PRs

https://github.com/concrete5/concrete5/pull/9502
https://github.com/concrete5/concrete5/pull/9565

## 3. Drop Zone cache bug

Drop zone JS cache file included token by mistake, which resulted in forever generating cache, which create a large amount of cache file under certain circumstances.

###  Files to patch

- application/config/app.php

### Related PRs

https://github.com/concrete5/concrete5/pull/9510

# Changelog

Date | Note
-----|-------
July 13, 2021 | Initial patches
