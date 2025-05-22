=== BoltAudit ===
Contributors: heymehedi
Tags: security, audit, username, password, scanner, brute force, hardening
Requires at least: 5.6
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 0.0.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A lightweight WordPress security scanner that warns you if your admin account is using a risky username or potentially weak password. No bloat. Just the basics done right.

== Description ==

**BoltAudit – Security Scanner** helps WordPress site owners avoid the most common entry points for attackers.

Right now, it checks if you're using:
- A commonly used or default username (`admin`, `test`, `demo`, etc.)

These simple mistakes open the door to brute force attacks. BoltAudit flags them with clear admin notices so you can fix them fast.

**Perfect for:**
- Beginners who forget the basics
- Busy developers who want quick wins
- Agencies who want auto-audits for clients

**Lightweight. Privacy-friendly. Zero configs. Just activate and it watches your six.**

== Installation ==

1. Upload the plugin to your `/wp-content/plugins/` directory
2. Activate via the Plugins menu in WordPress
3. Visit your WordPress Dashboard — any warnings will show up there

== Frequently Asked Questions ==

= Does this plugin check my actual password? =

No. Your real password is encrypted and never accessible. BoltAudit does a smart guess using the hash — if it's too short, chances are it's not secure.

= Does it only check the "admin" user? =

Nope. It checks a whole list of risky, predictable usernames — like `admin`, `user`, `demo`, `test`, and more.

= Can I use this with multisite? =

Right now, it’s for single-site installs. Multisite support is coming soon.

= What’s coming next? =

Future updates will scan for:
- Insecure file permissions
- Active debug mode in production
- Known vulnerable plugins
- Publicly visible config leaks

== Changelog ==

= 0.0.1 =
* Initial release: detects common usernames and warns about weak password hashes.
