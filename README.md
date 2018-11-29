# com.lemniscus.unfreezefinancialtype

In CiviCRM out of the box, when you use the "edit contribution" form to edit a contribution related to a membership or participation in an event, the financial type and amount aren't editable -- these fields are "frozen". This little extension "unfreezes" those fields; in other words it allows you to edit them via that form.

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.4+
* CiviCRM 5.5 (may work with previous/later versions, but I have not tested it with them)

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl com.lemniscus.unfreezefinancialtype@https://github.com/highfalutin/com.lemniscus.unfreezefinancialtype/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/highfalutin/com.lemniscus.unfreezefinancialtype.git
cv en unfreezefinancialtype
```

## Usage

Enable the extension. Navigate to a contribution list, for example on an individual's record. Click "edit" on a contribution record. Even if the contribution is related to a membership or event, you will be able to edit the amount and financial type.