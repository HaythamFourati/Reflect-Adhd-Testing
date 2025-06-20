# Reflect Neuro - Custom WordPress Theme

This is the official custom WordPress theme for Reflect Neuro, a telehealth service providing ADHD assessments across California. The theme is built from the ground up to be lightweight, fast, and easy to manage.

## Features

*   **Modern Tech Stack:** Built with Tailwind CSS for a utility-first styling approach.
*   **Custom Page Templates:** Includes unique templates for the Homepage, Contact Page, and City-specific landing pages.
*   **WordPress Customizer Integration:** Easily update key information like the business phone number and call-to-action buttons directly from the WordPress admin panel.
*   **Dynamic Menus:** Manage navigation menus (like the one in the footer) through the standard WordPress menu interface.
*   **Contact Form 7:** Utilizes the popular Contact Form 7 plugin for the consultation form, with custom styling to match the theme's design.
*   **Responsive Design:** Fully responsive and optimized for a seamless experience on desktops, tablets, and mobile devices.
*   **Reusable Components:** Uses template parts for modular sections like the main Call-to-Action block, making the code clean and maintainable.

## Requirements

*   WordPress version 5.9 or higher
*   PHP version 7.4 or higher
*   Node.js and npm installed for development

## Installation

1.  Download the theme folder as a `.zip` file.
2.  In your WordPress admin dashboard, navigate to **Appearance > Themes**.
3.  Click **Add New**, then **Upload Theme**.
4.  Choose the zipped theme file and click **Install Now**.
5.  Once installed, click **Activate**.

## Development

This theme uses `npm` to manage dependencies and run build scripts for compiling CSS.

### 1. Install Dependencies

Navigate to the theme's root directory in your terminal and run:

```bash
npm install
```

### 2. Build Assets

To compile the Tailwind CSS and other assets for production, run:

```bash
npm run build
```

This command will process the `src/index.css` file, apply Tailwind CSS, minify it, and output the final stylesheet to `build/index.css`, which is enqueued by the theme.

## Theme Customization

Several key aspects of the theme can be managed directly from the WordPress Customizer (**Appearance > Customize**):

*   **Site Identity:** Set the site logo.
*   **Contact Information:** Update the phone number displayed in the header and footer.
*   **Call to Action (CTA):** Change the text and link for the main CTA buttons.

## Managing the Contact Form

The contact form on the `/contact` page is managed by the **Contact Form 7** plugin.

1.  **To edit the form fields and structure:**
    *   Go to the **Contact** section in your WordPress admin sidebar.
    *   Find the form titled "adhd contact" and click edit.
    *   A template for the form structure, including all necessary Tailwind CSS classes, is available in the theme at: `assets/contact-form-template.txt`. You can copy from this file and paste it into the form editor.

2.  **To fix styling issues:**
    *   Custom CSS has been added to `assets/css/contact-form-fixes.css` to ensure the form displays correctly. This file is automatically loaded by the theme.

## Managing Menus

The footer "Quick Links" section is controlled by a WordPress menu.

1.  Navigate to **Appearance > Menus**.
2.  Select the menu assigned to the **Footer** display location.
3.  Add, remove, or reorder the links as needed.
4.  Click **Save Menu**.
