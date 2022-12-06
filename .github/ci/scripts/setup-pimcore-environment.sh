#!/bin/bash

set -eu -o xtrace

cp -r .github/ci/files/var/. var
cp .github/ci/files/.env .