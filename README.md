# Content Disposition With WP Offload S3 Plugin in WordPress
Set [Content-Disposition](https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Disposition) response header on the files(Images, PDFs, csv etc) which are offloaded to Cloudfront using [WP Offload S3](https://wordpress.org/plugins/amazon-s3-and-cloudfront/) Plugin.

These are some basic examples which can be manipulated accroding to the requirements.

Following filter is tested with the WP Offload S3 v1.6.2.

## Examples 

### [Set Content-Disposition on all files](example-1.php)
This example sets the `Content-Disposition` header on all the uploaded files.

### [Set Content-Disposition from the Specfic Page](example-2.php)
This example checking from where the file is uploading. If it is uploading from some specific page then set `Content-Disposition` header for that file.

