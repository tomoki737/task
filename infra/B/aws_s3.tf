resource "aws_s3_bucket" "main" {
  bucket = "sample-bucket"

  tags = {
    Name        = "sample-bucket"
  }
}

resource "aws_s3_bucket_object" "main" {
    bucket = "sample-bucket"
    key = "sample.txt"
    source = "./sample.txt"
}