# MantisBT Official Builds

## Official builds

### Pre-release checkins

- Verify line terminations

These steps typically happen from developer's machine.

```bash
php -q ./scripts/check_lineterm.php -c
```

- Update to `MANTIS_VERSION` in `core/constant_inc.php`
- Update `Revision_History.xml` for Admin Guide
- Update `Revision_History.xml` for Developer Guide
- Checkin `Update release to x.y.z`

### Tag the release

These steps typically happen from the machine used for official buids which
has the tools like gpg, gpg key, zip, tar, and tool chain needed to build docbook.

To setup a machine for official build, see instructions at
[Release Process](http://www.mantisbt.org/wiki/doku.php/mantisbt:release_process).

```bash
git tag -s release-$VERSION -m "Stable release $VERSION"
git push origin release-$VERSION
```

### Build the release

```bash
VERSION=x.y.z
./scripts/buildrelease-repo.py --fresh --docbook --ref release-$VERSION ./release-$VERSION ./mantisbt-repo-$VERSION
```

## Continuous Integration

This directory contains some command-line scripts useful for performance
or integration issues. Please refer to the mantis manual for a more complete
documentation about their purpose and usage.

- _travis_before_script.sh_ and _travis_script.sh_ :
    Travis-CI scripts (used in _.travis.yml_)

## Scripts Distributed to Users

These are the scripts that are targetted to MantisBT users.

- _send_emails.php_ :
    Allows sending bug mails asynchronously
