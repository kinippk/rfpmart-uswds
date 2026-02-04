<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Send a Message - RFPMart + USWDS</title>
    <meta name="description" content="Submit questions or requests directly to the city using the online contact form." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">

        <div class="bg-primary-darker">
            <section class="grid-container usa-section">
                <div class="grid-row flex-justify-center">
                    <div class="grid-col-12 tablet:grid-col-8 desktop:grid-col-6">
                        <div class="bg-white padding-y-3 padding-x-5 border border-base-lighter">

                            <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                                <ul class="usa-breadcrumb__list">
                                    <li class="usa-breadcrumb__list-item">
                                        <a href="./" class="usa-breadcrumb__link">
                                            <span class="">Home</span>
                                        </a>
                                    </li>
                                    <li class="usa-breadcrumb__list-item">
                                        <a href="#" class="usa-breadcrumb__link">
                                            <span class="">Contact</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>

                            <!-- <h1 class="margin-bottom-0">Contact Us Form</h1> -->
                            <!-- <p>
                                Please fill out all required field and we will get back to you within 48 business hours
                            </p> -->

                         <form class="usa-form usa-form--large maxw-full" method="post">

                                <fieldset class="usa-fieldset">
                                    <legend class="usa-legend usa-legend--large">
                                        Get in Touch
                                    </legend>

                                    <!-- Name Row -->
                                    <div class="grid-row grid-gap">
                                        <div class="grid-col-12 tablet:grid-col-6">
                                            <label class="usa-label" for="first-name">
                                                First Name <span class="text-red">*</span>
                                            </label>
                                            <input class="usa-input" id="first-name" name="first_name" required />
                                        </div>

                                        <div class="grid-col-12 tablet:grid-col-6">
                                            <label class="usa-label" for="last-name">
                                                Last Name <span class="text-red">*</span>
                                            </label>
                                            <input class="usa-input" id="last-name" name="last_name" required />
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <label class="usa-label margin-top-3" for="email">
                                        Email Address <span class="text-red">*</span>
                                    </label>
                                    <input class="usa-input" id="email" name="email" type="email" required />

                                     <!-- Subject -->
                                    <div class="usa-form-group">
                                        <label class="usa-label" for="subject">
                                            Subject <span class="text-red">*</span>
                                        </label>
                                        <input class="usa-input" id="subject" name="subject" type="text" required />
                                    </div>

                                    <!-- Message -->
                                    <div class="usa-form-group">
                                        <label class="usa-label" for="message">
                                            Message <span class="text-red">*</span>
                                        </label>
                                        <textarea
                                            class="usa-textarea"
                                            id="message"
                                            name="message"
                                            rows="5"
                                            required></textarea>
                                    </div>


                                    <!-- Submit -->
                                    <button class="usa-button usa-button--big width-full margin-top-4">
                                        Send Message
                                    </button>
                                </fieldset>

                            </form>


                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>