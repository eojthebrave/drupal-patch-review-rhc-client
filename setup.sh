#! /bin/bash

# Example
# setup.sh http://drupal.org/files/multiple_fapi_uploads_625958_61.patch

echo $1;

# Usage example.
usage() {
  echo "usage: $0 http://example.com/file.patch"
}

if [[ -z $1 ]]; then
  echo "You must specify the URL of a patch to use when building this environment.";
  exit 0;
fi

SETTINGS_PHP='../../data/drupal-patch-preview-client/settings.php';

echo $PATCH_FILE;
echo $SETTINGS_PHP;

cd '../../repo/';

# Remove the existing php directory.
rm -rf php/;

# Clone the Drupal 8.x repo. Use a shallow clone so that it's quicker.
git clone --depth 1 --recursive --branch 8.x http://git.drupal.org/project/drupal.git php;
cd php;

# Download the patch file.
curl -O $1;

# Apply the patch file.
git apply $(ls | grep patch | tail -n 1);

# Symlink our custom settings.php file.
ln -s $SETTINGS_PHP sites/default/settings.php;
