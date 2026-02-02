# Vladino.me - Personal Website

## Project Overview
Personal website for Vladimír Vráb - Staff Software Engineer at Bitpanda. Built with Laravel framework.

- **GitHub:** [iNviNho](https://github.com/iNviNho)
- **LinkedIn:** [vladino-vrab](https://www.linkedin.com/in/vladino-vrab/)

## Tech Stack
- **Framework:** Laravel (PHP)
- **Frontend:** Blade templates, Bootstrap 4, jQuery, Font Awesome
- **Local Development:** Docker (see `docker-compose-local.yml`)

## Project Structure

```
├── app/
│   └── Http/
│       └── Controllers/
│           └── BaseController.php    # Main controller for all pages
├── resources/
│   ├── lang/
│   │   └── en/
│   │       └── base.php              # All translations/text content
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php         # Master layout template
│       └── base/
│           ├── home.blade.php        # Homepage
│           ├── resume.blade.php      # CV/Resume page
│           └── contact.blade.php     # Contact page
├── routes/
│   └── web.php                       # Route definitions
└── public/
    ├── css/app.css                   # Main stylesheet
    └── images/
        └── logos/                    # Technology logos (SVG & PNG)
```

## Routes
| URL | Controller Method | View |
|-----|------------------|------|
| `/` | `BaseController@home` | `base/home.blade.php` |
| `/resume` | `BaseController@resume` | `base/resume.blade.php` |
| `/contact` | `BaseController@contact` | `base/contact.blade.php` |

## Key Files for Content Updates

### Text Content: `resources/lang/en/base.php`
All website text is stored here as translation keys. Key sections:
- **Homepage:** `whoami`, `whoamitext`, `drugheader`, `druglove`, etc.
- **Resume Summary:** `summarytext1`, `summarytext2`
- **Work History:** `artexeheader`, `artexetext`, `bitpanda1header`-`bitpanda4header`, etc.
- **Skills:** `programminglanguages`, `frameworks`, `databases`, `messagebrokers`, `cloudinfra`, `architecturepatterns`
- **Languages:** `slovak`, `czech`, `english`, `german`
- **Hobby Projects:** `hobbyprojects`, `hobbyproject1name`, `hobbyproject1desc`, etc.

### Resume Structure: `resources/views/base/resume.blade.php`
Contains the resume layout with:
- Personal info section
- Summary (10+ years, Staff Engineer at multi-asset trading platform)
- Education
- Work history (7 entries)
- Technical skills table
- Languages table (Slovak, Czech, English, German)
- Interests & hobbies (includes game development)
- Hobby projects (cabinparser, gameformykids)
- Logo showcase section (enterprise-first: Java, Spring, Kafka, PostgreSQL, AWS, etc.)

## Work History (Current)
1. **Self Employed** (2012-2013) - First steps in web development
2. **ARTEXE** (Oct 2013 - Feb 2018) - Fullstack Developer
3. **Bitpanda - Software Engineer** (Mar 2018 - Sep 2021)
4. **Notifea - Founder** (Sep 2019 - Mar 2023) - Side project, sold in 2023
5. **Bitpanda - Technical Lead** (Sep 2021 - Jul 2023)
6. **Bitpanda - Lead Software Engineer** (Aug 2023 - Jan 2026)
7. **Bitpanda - Staff Software Engineer** (Jan 2026 - Present)

## Technical Skills (Current)
- **Languages:** Java, TypeScript, PHP, C++, SQL, HTML, CSS
- **Frameworks:** Spring Boot, Micronaut, Express, Laravel, Nette
- **Databases:** PostgreSQL, MySQL, Amazon DynamoDB, Redis
- **Message Brokers:** Apache Kafka, Amazon SQS
- **Cloud & Infra:** AWS Lambda, Datadog, Docker, Sentry, Graylog
- **Architecture:** Event-driven, Microservices, CQRS
- **Tools:** IntelliJ IDEA, PHPStorm, CLion, Datagrip, Postman, GitLab, GitHub, Miro, Claude Code, GitHub Copilot
- **OS:** macOS, Ubuntu

## Hobby Projects
- **[cabinparser](https://github.com/iNviNho/cabinparser)** - Java app for cabin/property investment analysis
- **[gameformykids](https://github.com/iNviNho/gameformykids)** - 3D game exploring game development

## Local Development
```bash
# Using Docker
docker-compose -f docker-compose-local.yml up

# Or using artisan
php artisan serve
```

Website runs on `http://localhost`

## Logo Files
Located in `public/images/logos/`:
- SVG (new): java.svg, spring.svg, kafka.svg, postgresql.svg, aws.svg, intellij.svg
- PNG (existing): docker.png, redis.png, mysql.png, git.png, php.png, laravel.png

## Notes
- Uses Font Awesome icons (`fas fa-*` classes)
- Both desktop and mobile views for tables (`.table-mobile-hidden` / `.table-mobile-show`)
- Date columns use `white-space: nowrap` to prevent wrapping
- Bitpanda is described as "multi-asset trading platform" (not cryptocurrency)
