<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Our Services | RFPMart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Explore the services we provide to support vendors and agencies." />
    <?php require_once '1_head.php'; ?>
    <link rel="stylesheet" href="uswds/dist/css/uswds.min.css" />
</head>

<body>

 <?php require_once '2_nav.php'; ?>


<main id="main-content">

    <!-- Hero Section -->
    <section class="bg-primary-lighter usa-section">
        <div class="grid-container">
            <h1 class="usa-heading-xl">Our Services</h1>
            <p class="usa-intro">
                We help organizations publish, manage, and respond to RFPs efficiently.
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="usa-section">
        <div class="grid-container">
            <div class="grid-row grid-gap">

                <div class="grid-col-12 tablet:grid-col-4">
                    <div class="border border-base-lighter padding-3 radius-lg">
                        <h2 class="usa-heading-md">RFP Management</h2>
                        <p>
                            Create, publish, and manage RFPs using a secure and accessible platform.
                        </p>
                    </div>
                </div>

                <div class="grid-col-12 tablet:grid-col-4">
                    <div class="border border-base-lighter padding-3 radius-lg">
                        <h2 class="usa-heading-md">Vendor Discovery</h2>
                        <p>
                            Connect with qualified vendors quickly using structured search search tools.
                        </p>
                    </div>
                </div>

                <div class="grid-col-12 tablet:grid-col-4">
                    <div class="border border-base-lighter padding-3 radius-lg">
                        <h2 class="usa-heading-md">Secure Submissions</h2>
                        <p>
                            Ensure compliance and data protection with encrypted submissions.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="bg-base-lightest usa-section">
        <div class="grid-container text-center">
            <h2 class="usa-heading-lg">Ready to get started?</h2>
            <a href="contact.html" class="usa-button usa-button--big">
                Contact Us
            </a>
        </div>
    </section>

</main>


<?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>
<script src="uswds/dist/js/uswds.min.js"></script>
</body>
</html>
