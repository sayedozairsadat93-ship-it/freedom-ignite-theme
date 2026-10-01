<?php
get_header();
$contact_error = isset($_GET['contact_error']) ? sanitize_text_field(wp_unslash($_GET['contact_error'])) : '';
$contact_success = !empty($_GET['contact_success']);
?>
<main id="content">
    <section class="hero" aria-label="Hero section">
        <div class="hero-content">
            <div class="hero-tag"><?php echo esc_html(freedom_ignite_get_hero_tagline()); ?></div>
            <h1><?php echo esc_html__('Ignite Your Community.', 'freedom-ignite'); ?></h1>
            <p><?php echo esc_html__('A premium event experience designed to bring families, supporters, businesses, and local leaders together around a shared mission of pride, purpose, and momentum.', 'freedom-ignite'); ?></p>
            <div class="hero-actions">
                <a class="button" href="#registration"><?php esc_html_e('Get Tickets', 'freedom-ignite'); ?></a>
                <a class="button secondary" href="#mission"><?php esc_html_e('Learn More', 'freedom-ignite'); ?></a>
            </div>
            <div class="hero-meta">
                <span class="hero-meta-item"><span class="dot"></span> <?php esc_html_e('October 18–20', 'freedom-ignite'); ?></span>
                <span class="hero-meta-item"><span class="dot"></span> <?php esc_html_e('Austin, Texas', 'freedom-ignite'); ?></span>
                <span class="hero-meta-item"><span class="dot"></span> <?php esc_html_e('Live Music • Food • Family Fun', 'freedom-ignite'); ?></span>
            </div>
        </div>
    </section>

    <section class="section" id="overview">
        <div class="container overview-grid">
            <div>
                <h3><?php esc_html_e('An experience built for energy, community, and lasting impact.', 'freedom-ignite'); ?></h3>
            </div>
            <div>
                <p><?php echo esc_html__('From the first welcome to the final encore, each moment is designed to create connection, excitement, and meaningful action. This is more than an event—it is a movement built around pride, purpose, and possibility.', 'freedom-ignite'); ?></p>
                <div class="stat-grid">
                    <div class="stat-card">
                        <span class="stat-number">12k+</span>
                        <span><?php esc_html_e('Attendees', 'freedom-ignite'); ?></span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">40+</span>
                        <span><?php esc_html_e('Partners', 'freedom-ignite'); ?></span>
                    </div>
                    <div class="stat-card">
                        <span class="stat-number">3 days</span>
                        <span><?php esc_html_e('Of events', 'freedom-ignite'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="mission">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow"><?php esc_html_e('Our mission', 'freedom-ignite'); ?></span>
                <h2><?php esc_html_e('Built to support, uplift, and unite.', 'freedom-ignite'); ?></h2>
                <p><?php esc_html_e('We bring communities together with a premium event experience that creates lasting relationships and productive momentum.', 'freedom-ignite'); ?></p>
            </div>

            <div class="mission-grid">
                <article class="mission-card">
                    <div class="mission-card-inner">
                        <div class="mission-icon">★</div>
                        <h3><?php esc_html_e('Celebrate Community', 'freedom-ignite'); ?></h3>
                        <p><?php esc_html_e('Turn awareness into action with a vibrant platform where people connect, celebrate, and contribute together.', 'freedom-ignite'); ?></p>
                        <a href="#"><?php esc_html_e('Learn more', 'freedom-ignite'); ?> →</a>
                    </div>
                </article>
                <article class="mission-card">
                    <div class="mission-card-inner">
                        <div class="mission-icon">✦</div>
                        <h3><?php esc_html_e('Support the Mission', 'freedom-ignite'); ?></h3>
                        <p><?php esc_html_e('Partner with a trusted event and community platform that champions service, pride, and positive engagement.', 'freedom-ignite'); ?></p>
                        <a href="#"><?php esc_html_e('Join us', 'freedom-ignite'); ?> →</a>
                    </div>
                </article>
                <article class="mission-card">
                    <div class="mission-card-inner">
                        <div class="mission-icon">▣</div>
                        <h3><?php esc_html_e('Create Impact', 'freedom-ignite'); ?></h3>
                        <p><?php esc_html_e('Every experience is designed to inspire generosity, collaboration, and measurable action across the community.', 'freedom-ignite'); ?></p>
                        <a href="#"><?php esc_html_e('Get involved', 'freedom-ignite'); ?> →</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section" id="attractions">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow"><?php esc_html_e('Attractions', 'freedom-ignite'); ?></span>
                <h2><?php esc_html_e('Everything that makes the experience unforgettable.', 'freedom-ignite'); ?></h2>
                <p><?php esc_html_e('A premium lineup of activities and experiences crafted for families, professionals, and supporters alike.', 'freedom-ignite'); ?></p>
            </div>

            <div class="feature-grid">
                <article class="feature-card">
                    <figure><img src="https://images.unsplash.com/photo-1501386761578-eac5c94b800a?auto=format&fit=crop&w=900&q=80" alt="Live music" /></figure>
                    <div class="feature-card-body">
                        <span class="feature-tag"><?php esc_html_e('Live Music', 'freedom-ignite'); ?></span>
                        <h3><?php esc_html_e('Main Stage Energy', 'freedom-ignite'); ?></h3>
                        <p><?php esc_html_e('High-impact performances and live acts that keep the crowd engaged from start to finish.', 'freedom-ignite'); ?></p>
                        <div class="feature-actions"><a class="button ghost" href="#"><?php esc_html_e('Explore', 'freedom-ignite'); ?></a></div>
                    </div>
                </article>

                <article class="feature-card">
                    <figure><img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=900&q=80" alt="Family activities" /></figure>
                    <div class="feature-card-body">
                        <span class="feature-tag"><?php esc_html_e('Family Activities', 'freedom-ignite'); ?></span>
                        <h3><?php esc_html_e('Fun for Every Generation', 'freedom-ignite'); ?></h3>
                        <p><?php esc_html_e('Interactive stations, experiences, and family-friendly attractions that keep everyone engaged.', 'freedom-ignite'); ?></p>
                        <div class="feature-actions"><a class="button ghost" href="#"><?php esc_html_e('Explore', 'freedom-ignite'); ?></a></div>
                    </div>
                </article>

                <article class="feature-card">
                    <figure><img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=900&q=80" alt="Food and vendors" /></figure>
                    <div class="feature-card-body">
                        <span class="feature-tag"><?php esc_html_e('Food & Vendors', 'freedom-ignite'); ?></span>
                        <h3><?php esc_html_e('Local Flavor & Community', 'freedom-ignite'); ?></h3>
                        <p><?php esc_html_e('A curated mix of local favorites, vendors, and partnerships that support the broader cause.', 'freedom-ignite'); ?></p>
                        <div class="feature-actions"><a class="button ghost" href="#"><?php esc_html_e('Explore', 'freedom-ignite'); ?></a></div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section video-section">
        <div class="container video-layout">
            <div class="video-frame" aria-label="Video section">
                <div class="video-placeholder">
                    <span class="play-button" aria-hidden="true">▶</span>
                </div>
            </div>
            <div class="video-copy">
                <span class="eyebrow" style="color:#f9d57f;"><?php esc_html_e('Featured video', 'freedom-ignite'); ?></span>
                <h3><?php esc_html_e('See what makes this experience memorable.', 'freedom-ignite'); ?></h3>
                <p><?php esc_html_e('Experience the atmosphere, the people, and the energy that turns an event into a community moment. This is where pride meets purpose.', 'freedom-ignite'); ?></p>
                <div class="hero-actions">
                    <a class="button" href="#"><?php esc_html_e('Watch Highlights', 'freedom-ignite'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="partners">
        <div class="container">
            <div class="section-heading">
                <span class="eyebrow"><?php esc_html_e('Partners & supporters', 'freedom-ignite'); ?></span>
                <h2><?php esc_html_e('Trusted by businesses, organizations, and community leaders.', 'freedom-ignite'); ?></h2>
                <p><?php esc_html_e('We’re proud to work alongside local partners who believe in building stronger, more connected communities.', 'freedom-ignite'); ?></p>
            </div>

            <div class="partner-grid">
                <div class="partner-card"><img src="https://placehold.co/180x80/FFFFFF/112a3b?text=PARTNER+1" alt="Partner 1" /></div>
                <div class="partner-card"><img src="https://placehold.co/180x80/FFFFFF/112a3b?text=PARTNER+2" alt="Partner 2" /></div>
                <div class="partner-card"><img src="https://placehold.co/180x80/FFFFFF/112a3b?text=PARTNER+3" alt="Partner 3" /></div>
                <div class="partner-card"><img src="https://placehold.co/180x80/FFFFFF/112a3b?text=PARTNER+4" alt="Partner 4" /></div>
                <div class="partner-card"><img src="https://placehold.co/180x80/FFFFFF/112a3b?text=PARTNER+5" alt="Partner 5" /></div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="cta-band">
                <div>
                    <span class="eyebrow" style="color:#f9d57f;"><?php esc_html_e('Become a partner', 'freedom-ignite'); ?></span>
                    <h2><?php esc_html_e('Support the mission and elevate the experience.', 'freedom-ignite'); ?></h2>
                    <p><?php esc_html_e('Partner with us to help create a premium event that drives visibility, meaningful engagement, and community impact.', 'freedom-ignite'); ?></p>
                </div>
                <div class="cta-actions">
                    <a class="button" href="#registration"><?php esc_html_e('Sponsorship Opportunities', 'freedom-ignite'); ?></a>
                    <a class="button secondary" href="#contact"><?php esc_html_e('Contact Us', 'freedom-ignite'); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="registration">
        <div class="container contact-wrap">
            <div class="contact-panel">
                <span class="eyebrow"><?php esc_html_e('Registration', 'freedom-ignite'); ?></span>
                <h3><?php esc_html_e('Get involved today.', 'freedom-ignite'); ?></h3>
                <p><?php esc_html_e('Whether you want to attend, sponsor, partner, or participate, we’d love to connect with you.', 'freedom-ignite'); ?></p>
                <ul class="contact-list">
                    <li><?php esc_html_e('General inquiries', 'freedom-ignite'); ?></li>
                    <li><?php esc_html_e('Sponsorship opportunities', 'freedom-ignite'); ?></li>
                    <li><?php esc_html_e('Vendor registration', 'freedom-ignite'); ?></li>
                    <li><?php esc_html_e('Community partnership', 'freedom-ignite'); ?></li>
                </ul>
            </div>

            <form class="theme-form" method="post" action="<?php echo esc_url(home_url('/')); ?>" novalidate>
                <?php wp_nonce_field('freedom_contact'); ?>
                <input type="hidden" name="freedom_contact_submit" value="1">

                <?php if ($contact_success) : ?>
                    <p class="alert success"><?php esc_html_e('Your inquiry was successfully submitted. We will be in touch soon.', 'freedom-ignite'); ?></p>
                <?php endif; ?>

                <?php if (!empty($contact_error)) : ?>
                    <p class="alert error"><?php esc_html_e('There was a problem submitting your form. Please check the required fields and try again.', 'freedom-ignite'); ?></p>
                <?php endif; ?>

                <div class="form-row">
                    <label>
                        <?php esc_html_e('Name', 'freedom-ignite'); ?>
                        <input type="text" name="name" required>
                    </label>
                    <label>
                        <?php esc_html_e('Phone', 'freedom-ignite'); ?>
                        <input type="tel" name="phone">
                    </label>
                </div>

                <div class="form-row">
                    <label>
                        <?php esc_html_e('Email', 'freedom-ignite'); ?>
                        <input type="email" name="email" required>
                    </label>
                    <label>
                        <?php esc_html_e('Organization', 'freedom-ignite'); ?>
                        <input type="text" name="organization">
                    </label>
                </div>

                <label>
                    <?php esc_html_e('Inquiry Type', 'freedom-ignite'); ?>
                    <select name="interest">
                        <option value="general"><?php esc_html_e('General Inquiry', 'freedom-ignite'); ?></option>
                        <option value="sponsorship"><?php esc_html_e('Sponsorship', 'freedom-ignite'); ?></option>
                        <option value="vendor"><?php esc_html_e('Vendor Registration', 'freedom-ignite'); ?></option>
                        <option value="partnership"><?php esc_html_e('Partnership', 'freedom-ignite'); ?></option>
                    </select>
                </label>

                <label>
                    <?php esc_html_e('Message', 'freedom-ignite'); ?>
                    <textarea name="message" required></textarea>
                </label>

                <button class="button" type="submit"><?php esc_html_e('Submit Inquiry', 'freedom-ignite'); ?></button>
            </form>
        </div>
    </section>
</main>
<?php get_footer(); ?>
