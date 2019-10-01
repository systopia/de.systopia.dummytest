# de.systopia.dummytest

![Screenshot](/images/screenshot.png)

(*FIXME: In one or two paragraphs, describe what the extension does and why one would download it. *)

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.4+
* CiviCRM (*FIXME: Version number*)

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl de.systopia.dummytest@https://github.com/FIXME/de.systopia.dummytest/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/de.systopia.dummytest.git
cv en dummytest
```

## Testing

If you already have `docker` and `docker-compose` installed you can run the unit-tests with a very simple command:

```
cd resources/dockertests
docker-compose up
```

this command does the following things
- download docker-buildkit
- run docker-buildkit and build a environment with drupal and civicrm installed
- download the extension
- install the extension into civicrm
- run the unittests for the extension

if you want to use the environment for further testing afterwards your can reach it unter: http://test.localhost:7979/


## Usage

(* FIXME: Where would a new user navigate to get started? What changes would they see? *)

## Known Issues

(* FIXME *)
