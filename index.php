<?php require __DIR__ . '/2a8k5j.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Flavor & Form — Premier Modern Culinary Brand</title>
<meta name="description" content="Flavor & Form is a premier modern culinary and recipe brand rooted in geometric precision, bold flavor, and obsessive craft. Based in Washington, DC." />
<link rel="stylesheet" href="shared.css" />
<style>
/* ── HERO ── */
.hero {
  display: grid;
  grid-template-columns: 1fr 1fr;
  min-height: calc(100vh - 64px);
  border-bottom: 4px solid var(--black);
}

.hero-left {
  padding: 80px 64px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-right: 4px solid var(--black);
  position: relative;
  overflow: hidden;
}

.hero-geo {
  position: absolute;
  top: -60px; right: -60px;
  width: 240px; height: 240px;
  border: 24px solid var(--yellow);
  opacity: 0.3;
}

.hero-eyebrow {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-bottom: 28px;
}

.hero-eyebrow-line {
  width: 40px; height: 3px;
  background: var(--red);
}

.hero-eyebrow span {
  font-family: var(--font-head);
  font-weight: 700;
  font-size: 0.7rem;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: var(--red);
}

.hero-title {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: clamp(3rem, 6vw, 5.5rem);
  line-height: 0.95;
  letter-spacing: -0.03em;
  margin-bottom: 28px;
  text-transform: uppercase;
}

.hero-title .accent { color: var(--red); }

.hero-subtitle {
  font-size: 1rem;
  color: #444;
  max-width: 420px;
  line-height: 1.7;
  margin-bottom: 40px;
}

.hero-actions { display: flex; gap: 16px; flex-wrap: wrap; }

.hero-stats {
  display: flex;
  gap: 40px;
  margin-top: 60px;
  padding-top: 32px;
  border-top: 2px solid #ddd;
}

.hero-stat-num {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 1.8rem;
  letter-spacing: -0.02em;
}

.hero-stat-num span { color: var(--red); }

.hero-stat-label {
  font-size: 0.72rem;
  color: #777;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

.hero-right {
  position: relative;
  overflow: hidden;
  background: var(--black);
}

.hero-right img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.85;
  display: block;
}

.hero-tag {
  position: absolute;
  top: 32px; left: 32px;
  background: var(--red);
  color: #fff;
  font-family: var(--font-head);
  font-weight: 800;
  font-size: 0.7rem;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: 8px 16px;
  border: 2px solid #fff;
}

.hero-caption {
  position: absolute;
  bottom: 0; left: 0; right: 0;
  background: rgba(17,17,17,0.88);
  padding: 20px 28px;
  color: var(--off-white);
  font-family: var(--font-head);
  font-size: 0.9rem;
  font-weight: 600;
  border-top: 3px solid var(--yellow);
}

/* ── MARQUEE ── */
.marquee-strip {
  background: var(--red);
  color: #fff;
  padding: 14px 0;
  overflow: hidden;
  border-bottom: 4px solid var(--black);
  white-space: nowrap;
}

.marquee-track {
  display: inline-flex;
  animation: marquee 22s linear infinite;
}

.marquee-item {
  font-family: var(--font-head);
  font-weight: 800;
  font-size: 0.78rem;
  letter-spacing: 0.16em;
  text-transform: uppercase;
  padding: 0 40px;
}

.marquee-dot {
  color: var(--yellow);
}

@keyframes marquee {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* ── FEATURED CATEGORIES ── */
.categories-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  border-bottom: var(--border);
}

.cat-card {
  position: relative;
  overflow: hidden;
  border-right: var(--border);
  cursor: pointer;
  height: 320px;
}

.cat-card:last-child { border-right: none; }

.cat-card img {
  width: 100%; height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.4s ease;
  filter: brightness(0.6);
}

.cat-card:hover img { transform: scale(1.05); filter: brightness(0.4); }

.cat-label {
  position: absolute;
  bottom: 0; left: 0; right: 0;
  padding: 24px 20px;
  background: linear-gradient(transparent, rgba(0,0,0,0.9));
}

.cat-label h3 {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 1.1rem;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 0.04em;
  margin-bottom: 4px;
}

.cat-label span {
  font-size: 0.75rem;
  color: #bbb;
  letter-spacing: 0.08em;
}

.cat-card:hover .cat-label h3 { color: var(--yellow); }

/* ── RECIPE SECTION ── */
.recipe-full-section {
  border-bottom: 4px solid var(--black);
}

.recipe-full-header {
  display: grid;
  grid-template-columns: 1fr 1fr;
  border-bottom: var(--border);
}

.recipe-full-header-left {
  padding: 80px 64px;
  border-right: var(--border);
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.recipe-full-header-left .section-label { margin-bottom: 24px; }

.recipe-title {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: clamp(2rem, 4vw, 3.2rem);
  line-height: 1.05;
  letter-spacing: -0.02em;
  text-transform: uppercase;
  margin-bottom: 24px;
}

.recipe-meta {
  display: flex;
  gap: 0;
  border: var(--border);
  width: fit-content;
  margin-bottom: 28px;
}

.recipe-meta-item {
  padding: 12px 24px;
  border-right: 2px solid var(--black);
}

.recipe-meta-item:last-child { border-right: none; }

.recipe-meta-item span {
  display: block;
  font-family: var(--font-head);
  font-size: 0.65rem;
  font-weight: 700;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  color: #888;
  margin-bottom: 2px;
}

.recipe-meta-item strong {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 0.95rem;
}

.recipe-full-header-right {
  position: relative;
  min-height: 420px;
  background: var(--black);
  overflow: hidden;
}

.recipe-full-header-right img {
  width: 100%; height: 100%;
  object-fit: cover;
  opacity: 0.8;
  display: block;
}

.recipe-badge {
  position: absolute;
  top: 32px; right: 32px;
  background: var(--yellow);
  color: var(--black);
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 0.72rem;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  padding: 10px 18px;
  border: 2px solid var(--black);
}

.recipe-body {
  display: grid;
  grid-template-columns: 1fr 2fr;
  border-top: none;
}

.recipe-ingredients {
  padding: 60px 48px;
  border-right: var(--border);
  background: var(--black);
  color: var(--off-white);
}

.recipe-ingredients h3 {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 0.78rem;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  margin-bottom: 28px;
  padding-bottom: 16px;
  border-bottom: 1.5px solid #333;
  color: var(--yellow);
}

.ingredients-list { list-style: none; }

.ingredients-list li {
  display: flex;
  align-items: flex-start;
  gap: 12px;
  padding: 12px 0;
  border-bottom: 1px solid #222;
  font-size: 0.88rem;
  line-height: 1.4;
  color: #ccc;
}

.ingredients-list li::before {
  content: '▪';
  color: var(--red);
  font-size: 1rem;
  margin-top: 1px;
  flex-shrink: 0;
}

.recipe-instructions {
  padding: 60px 64px;
}

.recipe-instructions h3 {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 0.78rem;
  letter-spacing: 0.18em;
  text-transform: uppercase;
  margin-bottom: 36px;
  padding-bottom: 16px;
  border-bottom: var(--border);
  color: var(--red);
}

.instruction-step {
  display: grid;
  grid-template-columns: 48px 1fr;
  gap: 24px;
  padding: 24px 0;
  border-bottom: 1.5px solid #e8e8e4;
}

.step-num {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 2rem;
  color: #ddd;
  line-height: 1;
  letter-spacing: -0.04em;
}

.step-text {
  font-size: 0.92rem;
  line-height: 1.75;
  color: #333;
  padding-top: 6px;
}

/* ── FEATURED POSTS ── */
.posts-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  border-bottom: var(--border);
}

.post-card {
  border-right: var(--border);
  overflow: hidden;
  text-decoration: none;
  color: var(--black);
  display: block;
  transition: background 0.15s;
}

.post-card:last-child { border-right: none; }
.post-card:hover { background: var(--off-white); }
.post-card:hover .post-title { color: var(--red); }

.post-img {
  width: 100%; height: 240px;
  object-fit: cover;
  display: block;
  border-bottom: var(--border);
  filter: grayscale(15%);
  transition: filter 0.3s;
}

.post-card:hover .post-img { filter: grayscale(0%); }

.post-body { padding: 28px 28px 32px; }

.post-tags { display: flex; gap: 8px; flex-wrap: wrap; margin-bottom: 12px; }

.post-title {
  font-family: var(--font-head);
  font-weight: 800;
  font-size: 1.15rem;
  line-height: 1.25;
  text-transform: uppercase;
  letter-spacing: -0.01em;
  margin-bottom: 12px;
  transition: color 0.15s;
}

.post-excerpt { font-size: 0.82rem; color: #666; line-height: 1.65; }

.post-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 16px 28px;
  border-top: 1.5px solid #ddd;
  font-size: 0.72rem;
  color: #999;
  font-family: var(--font-head);
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

/* ── PRICING ── */
#pricing { scroll-margin-top: 64px; }

.pricing-intro {
  padding: 80px 64px 60px;
  border-bottom: var(--border);
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 60px;
  align-items: center;
}

.pricing-cards {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  border-top: none;
}

.pricing-card {
  border-right: var(--border);
  padding: 48px 40px;
  position: relative;
}

.pricing-card:last-child { border-right: none; }

.pricing-card.featured {
  background: var(--black);
  color: var(--off-white);
}

.pricing-tier {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 0.72rem;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  margin-bottom: 4px;
}

.pricing-tier-featured { color: var(--yellow); }
.pricing-tier-normal { color: var(--red); }

.pricing-price {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 3rem;
  letter-spacing: -0.04em;
  line-height: 1;
  margin: 16px 0 4px;
}

.pricing-price sup {
  font-size: 1.2rem;
  vertical-align: super;
  font-weight: 700;
}

.pricing-price sub {
  font-size: 0.85rem;
  font-weight: 400;
  color: #888;
}

.pricing-card.featured .pricing-price sub { color: #aaa; }

.pricing-desc {
  font-size: 0.82rem;
  color: #888;
  margin-bottom: 28px;
  line-height: 1.55;
  border-bottom: 1.5px solid #e0e0dc;
  padding-bottom: 24px;
}

.pricing-card.featured .pricing-desc { color: #bbb; border-color: #333; }

.pricing-perks { list-style: none; margin-bottom: 36px; }

.pricing-perks li {
  display: flex;
  align-items: flex-start;
  gap: 10px;
  padding: 9px 0;
  font-size: 0.84rem;
  line-height: 1.4;
  border-bottom: 1px solid #e8e8e4;
}

.pricing-card.featured .pricing-perks li { border-color: #2a2a2a; }

.perk-check {
  width: 18px; height: 18px;
  min-width: 18px;
  background: var(--red);
  display: flex; align-items: center; justify-content: center;
  color: #fff;
  font-size: 0.6rem;
  font-weight: 900;
  margin-top: 1px;
}

.featured-badge {
  position: absolute;
  top: 0; right: 32px;
  background: var(--red);
  color: #fff;
  font-family: var(--font-head);
  font-weight: 800;
  font-size: 0.62rem;
  letter-spacing: 0.14em;
  text-transform: uppercase;
  padding: 6px 14px;
}

/* ── TESTIMONIALS ── */
.testimonials {
  background: var(--blue);
  color: #fff;
  border-bottom: 4px solid var(--black);
}

.testimonials-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}

.testi {
  padding: 60px 48px;
  border-right: 1.5px solid rgba(255,255,255,0.12);
}

.testi:last-child { border-right: none; }

.testi-quote {
  font-size: 2.5rem;
  color: var(--red);
  line-height: 1;
  margin-bottom: 16px;
  font-family: Georgia, serif;
}

.testi-body {
  font-size: 0.9rem;
  line-height: 1.75;
  color: #b8c8d8;
  margin-bottom: 24px;
}

.testi-author {
  font-family: var(--font-head);
  font-weight: 800;
  font-size: 0.78rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
}

.testi-role {
  font-size: 0.72rem;
  color: #6a8aaa;
  letter-spacing: 0.08em;
}

/* ── NEWSLETTER BANNER ── */
.newsletter-banner {
  display: grid;
  grid-template-columns: 1fr 1fr;
  border-bottom: 4px solid var(--black);
}

.newsletter-left {
  background: var(--red);
  color: #fff;
  padding: 72px 64px;
  border-right: var(--border);
}

.newsletter-left h2 {
  font-family: var(--font-head);
  font-weight: 900;
  font-size: 2.5rem;
  text-transform: uppercase;
  letter-spacing: -0.02em;
  line-height: 1.05;
  margin-bottom: 16px;
}

.newsletter-left p { font-size: 0.9rem; opacity: 0.85; max-width: 340px; }

.newsletter-right {
  padding: 72px 64px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.newsletter-right p { font-size: 0.85rem; color: #666; margin-bottom: 24px; }

.newsletter-form { display: flex; gap: 0; border: 3px solid var(--black); }

.newsletter-form input {
  flex: 1;
  padding: 16px 20px;
  border: none;
  background: #fff;
  font-family: var(--font-body);
  font-size: 0.9rem;
  outline: none;
  border-radius: 0;
}

.newsletter-form button {
  padding: 16px 28px;
  background: var(--black);
  color: var(--off-white);
  border: none;
  font-family: var(--font-head);
  font-weight: 800;
  font-size: 0.72rem;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  cursor: pointer;
  border-left: 3px solid var(--black);
  transition: background 0.15s;
}

.newsletter-form button:hover { background: var(--red); }

@media (max-width: 1100px) {
  .hero { grid-template-columns: 1fr; min-height: auto; }
  .hero-right { height: 400px; }
  .hero-left { padding: 60px 32px; }
  .recipe-full-header { grid-template-columns: 1fr; }
  .recipe-full-header-right { min-height: 300px; }
  .recipe-body { grid-template-columns: 1fr; }
  .posts-grid { grid-template-columns: 1fr; }
  .post-card { border-right: none; border-bottom: var(--border); }
  .pricing-cards { grid-template-columns: 1fr; }
  .pricing-card { border-right: none; border-bottom: var(--border); }
  .testimonials-grid { grid-template-columns: 1fr; }
  .testi { border-right: none; border-bottom: 1.5px solid rgba(255,255,255,0.12); }
  .newsletter-banner { grid-template-columns: 1fr; }
  .newsletter-left { border-right: none; border-bottom: var(--border); padding: 48px 32px; }
  .newsletter-right { padding: 48px 32px; }
  .categories-grid { grid-template-columns: 1fr 1fr; }
  .cat-card:nth-child(2) { border-right: none; }
  .pricing-intro { grid-template-columns: 1fr; padding: 60px 32px; }
  .recipe-instructions { padding: 40px 32px; }
  .recipe-ingredients { padding: 40px 32px; }
}
</style>
</head>
<body>

<nav>
  <a href="index.html" class="nav-logo"><div class="nav-logo-text">Flavor<span>&</span>Form</div></a>
  <ul class="nav-links">
    <li><a href="index.html" class="active">Home</a></li>
    <li><a href="recipes.html">Recipes</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="#pricing" class="nav-cta" data-modal data-tier="Home Chef">Join Now</a></li>
  </ul>
  <button class="hamburger" aria-label="Menu"><span></span><span></span><span></span></button>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-left">
    <div class="hero-geo"></div>
    <div class="hero-eyebrow"><div class="hero-eyebrow-line"></div><span>Washington, DC — Est. 2019</span></div>
    <h1 class="hero-title">Where<br>Flavor<br>Meets <span class="accent">Form.</span></h1>
    <p class="hero-subtitle">Precision-driven recipes, geometric plating philosophy, and a culinary membership built for cooks who demand more from their kitchen.</p>
    <div class="hero-actions">
      <a href="recipes.html" class="btn btn-primary">Explore Recipes →</a>
      <button class="btn btn-outline" data-modal data-tier="Free Taste">Join Free</button>
    </div>
    <div class="hero-stats">
      <div>
        <div class="hero-stat-num">1<span>.</span>2M</div>
        <div class="hero-stat-label">Monthly Readers</div>
      </div>
      <div>
        <div class="hero-stat-num">840<span>+</span></div>
        <div class="hero-stat-label">Tested Recipes</div>
      </div>
      <div>
        <div class="hero-stat-num">12<span>K</span></div>
        <div class="hero-stat-label">Members</div>
      </div>
    </div>
  </div>
  <div class="hero-right">
    <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=900&q=80" alt="Modern culinary plating" loading="eager" />
    <div class="hero-tag">★ Featured Recipe</div>
    <div class="hero-caption">Brown Butter Chocolate Chip Cookies — The Internet's Most Loved Recipe</div>
  </div>
</section>

<!-- MARQUEE -->
<div class="marquee-strip" aria-hidden="true">
  <div class="marquee-track">
    <span class="marquee-item">Modern Culinary <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Geometric Plating <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Precision Baking <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Bold Flavor <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Washington DC <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Form Follows Function <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Flavor & Form <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Modern Culinary <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Geometric Plating <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Precision Baking <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Bold Flavor <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Washington DC <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Form Follows Function <span class="marquee-dot">◆</span></span>
    <span class="marquee-item">Flavor & Form <span class="marquee-dot">◆</span></span>
  </div>
</div>

<!-- CATEGORIES -->
<div class="categories-grid">
  <div class="cat-card">
    <img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?w=600&q=75" alt="Baking" loading="lazy" />
    <div class="cat-label"><h3>Baking</h3><span>148 Recipes</span></div>
  </div>
  <div class="cat-card">
    <img src="https://images.unsplash.com/photo-1569050467447-ce54b3bbc37d?w=600&q=75" alt="Fine Dining" loading="lazy" />
    <div class="cat-label"><h3>Fine Dining</h3><span>92 Recipes</span></div>
  </div>
  <div class="cat-card">
    <img src="https://images.unsplash.com/photo-1466637574441-749b8f19452f?w=600&q=75" alt="Weeknight" loading="lazy" />
    <div class="cat-label"><h3>Weeknight</h3><span>215 Recipes</span></div>
  </div>
  <div class="cat-card">
    <img src="https://images.unsplash.com/photo-1484723091739-30a097e8f929?w=600&q=75" alt="Brunch" loading="lazy" />
    <div class="cat-label"><h3>Brunch</h3><span>76 Recipes</span></div>
  </div>
</div>

<!-- FULL RECIPE SECTION -->
<section class="recipe-full-section" id="featured-recipe">
  <div class="recipe-full-header">
    <div class="recipe-full-header-left">
      <div class="section-label">Internet's Most Loved Recipe</div>
      <h2 class="recipe-title">The Ultimate Brown Butter Chocolate Chip Cookie</h2>
      <div class="recipe-meta">
        <div class="recipe-meta-item"><span>Prep</span><strong>15 min</strong></div>
        <div class="recipe-meta-item"><span>Cook</span><strong>12 min</strong></div>
        <div class="recipe-meta-item"><span>Yield</span><strong>24 cookies</strong></div>
        <div class="recipe-meta-item"><span>Difficulty</span><strong>Easy</strong></div>
      </div>
      <p style="font-size:0.9rem;color:#555;max-width:500px;line-height:1.7;margin-bottom:28px;">
        This is the recipe that broke the internet — shared over 4 million times, saved by over 800,000 home bakers, and declared the definitive chocolate chip cookie by three major food publications. Brown butter is the secret weapon. It transforms a familiar classic into something transcendent.
      </p>
      <div class="hero-actions">
        <a href="recipe-detail.html" class="btn btn-primary">View Full Recipe Page →</a>
        <button class="btn btn-outline" data-modal data-recipe="Brown Butter Chocolate Chip Cookie">Save Recipe</button>
      </div>
    </div>
    <div class="recipe-full-header-right">
      <img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?w=900&q=80" alt="Brown butter chocolate chip cookies" loading="lazy" />
      <div class="recipe-badge">🏆 #1 Most Saved</div>
    </div>
  </div>
  <div class="recipe-body">
    <div class="recipe-ingredients">
      <h3>Ingredients</h3>
      <ul class="ingredients-list">
        <li>1 cup brown butter (2 sticks), cooled</li>
        <li>1 cup dark brown sugar, packed</li>
        <li>½ cup white granulated sugar</li>
        <li>2 large eggs, room temperature</li>
        <li>1 tbsp pure vanilla extract</li>
        <li>2¼ cups all-purpose flour</li>
        <li>1 tsp baking soda</li>
        <li>1 tsp sea salt (plus flakes for topping)</li>
        <li>2 cups semi-sweet chocolate chunks</li>
      </ul>
    </div>
    <div class="recipe-instructions">
      <h3>Instructions</h3>
      <div class="instruction-step">
        <div class="step-num">01</div>
        <p class="step-text">Brown the butter in a light-colored saucepan over medium heat, stirring constantly, until it turns amber and smells deeply nutty and fragrant — about 6–8 minutes. Immediately pour into a mixing bowl and let cool to room temperature (about 20 minutes).</p>
      </div>
      <div class="instruction-step">
        <div class="step-num">02</div>
        <p class="step-text">Whisk the cooled browned butter with both sugars until perfectly smooth and glossy. Vigorously beat in the eggs and vanilla extract until the mixture is pale, thick, and ribbons off the whisk — at least 2 full minutes.</p>
      </div>
      <div class="instruction-step">
        <div class="step-num">03</div>
        <p class="step-text">Fold in the flour, baking soda, and salt with a rubber spatula until just combined — do not overmix. Gently fold in the heavy chocolate chunks, distributing evenly throughout the dough.</p>
      </div>
      <div class="instruction-step">
        <div class="step-num">04</div>
        <p class="step-text">Cover the bowl tightly with plastic wrap and chill the dough for a minimum of 30 minutes (overnight preferred for deeper flavor development and a more complex caramel note).</p>
      </div>
      <div class="instruction-step">
        <div class="step-num">05</div>
        <p class="step-text">Preheat oven to 350°F (175°C). Portion dough into 2-tablespoon balls on a lined geometric square baking sheet, spacing 3 inches apart. Bake 10–12 minutes until edges are set and golden but centers look underdone. Finish with a flake of sea salt. Let cool 8 minutes on the pan — the residual heat sets the perfect chewy center.</p>
      </div>
    </div>
  </div>
</section>

<!-- LATEST RECIPES -->
<section class="section" style="padding:0;border-bottom:4px solid var(--black);">
  <div style="padding:60px 64px 40px;border-bottom:var(--border);display:flex;align-items:center;justify-content:space-between;">
    <div>
      <div class="section-label">From the Kitchen</div>
      <h2 class="section-title" style="font-size:2.2rem;">Latest Recipes</h2>
    </div>
    <a href="recipes.html" class="btn btn-primary">All Recipes →</a>
  </div>
  <div class="posts-grid">
    <a href="recipe-detail.html" class="post-card">
      <img class="post-img" src="https://images.unsplash.com/photo-1476124369491-e7addf5db371?w=600&q=75" alt="Miso Glazed Salmon" loading="lazy" />
      <div class="post-body">
        <div class="post-tags"><span class="tag tag-blue">Fine Dining</span><span class="tag tag-outline">25 min</span></div>
        <h3 class="post-title">Miso-Glazed Salmon with Black Sesame & Microgreens</h3>
        <p class="post-excerpt">A geometric composition of umami-rich miso-glazed salmon fillet, nut-brown butter, crispy skin, and a precision microgreen garnish.</p>
      </div>
      <div class="post-footer"><span>Chef Adriana Cruz</span><span>Read Recipe →</span></div>
    </a>
    <a href="recipe-detail.html" class="post-card">
      <img class="post-img" src="https://images.unsplash.com/photo-1542834369-f10ebf06d3e5?w=600&q=75" alt="Truffle Pasta" loading="lazy" />
      <div class="post-body">
        <div class="post-tags"><span class="tag tag-red">Members Only</span><span class="tag tag-outline">35 min</span></div>
        <h3 class="post-title">Black Truffle Cacio e Pepe on Hand-Cut Pappardelle</h3>
        <p class="post-excerpt">The Roman classic elevated with shaved black truffle, aged Pecorino, and pasta pulled and cut by hand into precise, architectural ribbons.</p>
      </div>
      <div class="post-footer"><span>Marcus Webb</span><span>Read Recipe →</span></div>
    </a>
    <a href="recipe-detail.html" class="post-card">
      <img class="post-img" src="https://images.unsplash.com/photo-1540189549336-e6e99c3679fe?w=600&q=75" alt="Seasonal Bowl" loading="lazy" />
      <div class="post-body">
        <div class="post-tags"><span class="tag tag-yellow">Weeknight</span><span class="tag tag-outline">20 min</span></div>
        <h3 class="post-title">Roasted Seasonal Grain Bowl with Tahini & Preserved Lemon</h3>
        <p class="post-excerpt">A riot of color, texture, and flavor — caramelized root vegetables over farro, finished with a sharp preserved lemon tahini dressing.</p>
      </div>
      <div class="post-footer"><span>Nadia Osei</span><span>Read Recipe →</span></div>
    </a>
  </div>
</section>

<!-- PRICING -->
<section id="pricing" style="border-bottom:4px solid var(--black);">
  <div class="pricing-intro">
    <div>
      <div class="section-label">Membership</div>
      <h2 class="section-title" style="font-size:2.8rem;">Choose Your<br>Culinary Level</h2>
    </div>
    <div>
      <p style="font-size:0.95rem;color:#555;line-height:1.75;margin-bottom:20px;">Every membership tier is built on the same principle as our recipes: ruthless precision, zero waste. Choose the level that matches your ambition. Cancel anytime.</p>
      <div style="display:flex;gap:20px;font-size:0.78rem;color:#888;flex-wrap:wrap;">
        <span>✓ Cancel anytime</span>
        <span>✓ No hidden fees</span>
        <span>✓ Instant access</span>
      </div>
    </div>
  </div>
  <div class="pricing-cards">
    <!-- FREE -->
    <div class="pricing-card">
      <div class="pricing-tier pricing-tier-normal">Free Taste</div>
      <div class="pricing-price"><sup>$</sup>0<sub>/month</sub></div>
      <p class="pricing-desc">The perfect entry point. Experience our philosophy before committing — no credit card required.</p>
      <ul class="pricing-perks">
        <li><div class="perk-check">✓</div> Access to 50+ free recipes</li>
        <li><div class="perk-check">✓</div> Weekly recipe newsletter</li>
        <li><div class="perk-check">✓</div> Basic technique guides</li>
        <li><div class="perk-check">✓</div> Community forum access</li>
        <li><div class="perk-check" style="background:#ddd;color:#999;">✗</div> <span style="color:#aaa;">Full recipe archive</span></li>
      </ul>
      <button class="btn btn-outline" style="width:100%;justify-content:center;" data-modal data-tier="Free Taste">Start Free →</button>
    </div>
    <!-- HOME CHEF -->
    <div class="pricing-card featured">
      <div class="featured-badge">Most Popular</div>
      <div class="pricing-tier pricing-tier-featured">Home Chef</div>
      <div class="pricing-price" style="color:var(--off-white)"><sup>$</sup>12<sub style="color:#aaa">/month</sub></div>
      <p class="pricing-desc">For the serious home cook who refuses to compromise on quality, depth, or technique.</p>
      <ul class="pricing-perks" style="color:var(--off-white)">
        <li><div class="perk-check">✓</div> Everything in Free Taste</li>
        <li><div class="perk-check">✓</div> 840+ full recipe archive</li>
        <li><div class="perk-check">✓</div> Step-by-step video guides</li>
        <li><div class="perk-check">✓</div> Printable recipe cards (PDF)</li>
        <li><div class="perk-check">✓</div> Monthly ingredient sourcing guide</li>
      </ul>
      <button class="btn btn-red" style="width:100%;justify-content:center;" data-modal data-tier="Home Chef">Get Home Chef →</button>
    </div>
    <!-- CULINARY MASTER -->
    <div class="pricing-card">
      <div class="pricing-tier pricing-tier-normal">Culinary Master</div>
      <div class="pricing-price"><sup>$</sup>29<sub>/month</sub></div>
      <p class="pricing-desc">The full Flavor & Form experience. For professionals, food creators, and obsessive home cooks.</p>
      <ul class="pricing-perks">
        <li><div class="perk-check">✓</div> Everything in Home Chef</li>
        <li><div class="perk-check">✓</div> 1 monthly live cooking class</li>
        <li><div class="perk-check">✓</div> Direct chef Q&A sessions</li>
        <li><div class="perk-check">✓</div> Early access to new recipes</li>
        <li><div class="perk-check">✓</div> Private Culinary Master community</li>
      </ul>
      <button class="btn btn-primary" style="width:100%;justify-content:center;" data-modal data-tier="Culinary Master">Get Culinary Master →</button>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials">
  <div style="padding:60px 64px 32px;border-bottom:1.5px solid rgba(255,255,255,0.1);">
    <div class="section-label" style="color:var(--yellow);">What Members Say</div>
    <h2 class="section-title" style="font-size:2.2rem;color:#fff;">The Community Speaks</h2>
  </div>
  <div class="testimonials-grid">
    <div class="testi">
      <div class="testi-quote">"</div>
      <p class="testi-body">Flavor & Form completely changed the way I think about cooking. The geometric plating guides alone were worth the entire year's subscription. My dinner party guests are consistently floored.</p>
      <div class="testi-author">Sarah M.</div>
      <div class="testi-role">Home Chef Member, Chicago IL</div>
    </div>
    <div class="testi">
      <div class="testi-quote">"</div>
      <p class="testi-body">As a professional pastry chef, I was skeptical. But the brown butter cookie recipe and the croissant lamination series convinced me — this is the real deal. Technically rigorous and deeply delicious.</p>
      <div class="testi-author">James T.</div>
      <div class="testi-role">Culinary Master Member, New York NY</div>
    </div>
    <div class="testi">
      <div class="testi-quote">"</div>
      <p class="testi-body">The monthly live classes with Chef Adriana are worth the price of Culinary Master alone. I've learned more in 3 months of membership than in two years of watching free YouTube videos.</p>
      <div class="testi-author">Priya K.</div>
      <div class="testi-role">Culinary Master Member, Austin TX</div>
    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<div class="newsletter-banner">
  <div class="newsletter-left">
    <h2>Never Miss a<br>New Recipe.</h2>
    <p>Join 1.2 million readers who receive our weekly dispatch — one perfect recipe, every Tuesday morning.</p>
  </div>
  <div class="newsletter-right">
    <div class="section-label">Free Newsletter</div>
    <p>No spam, ever. Just one beautifully crafted recipe every week with full technique notes. Unsubscribe anytime.</p>
    <form class="newsletter-form" onsubmit="event.preventDefault(); Modal.open('Free Taste', 'Newsletter');">
      <input type="email" placeholder="your@email.com" required />
      <button type="submit">Subscribe →</button>
    </form>
    <p style="font-size:0.72rem;color:#aaa;margin-top:12px;margin-bottom:0;">By subscribing you agree to our <a href="privacy.html" style="color:var(--red)">Privacy Policy</a>.</p>
  </div>
</div>

<!-- MODAL -->
<div class="modal-overlay" id="modalOverlay">
  <div class="modal">
    <div class="modal-header">
      <h3>Unlock Full Access</h3>
      <button class="modal-close">&times;</button>
    </div>
    <div class="modal-body">
      <p>Join thousands of passionate home cooks and culinary professionals. Enter your details below to get started instantly.</p>
      <form id="leadForm" novalidate>
        <div class="form-group"><label>Full Name *</label><input type="text" name="name" placeholder="Jane Doe" required /></div>
        <div class="form-group"><label>Email Address *</label><input type="email" name="email" placeholder="jane@example.com" required /></div>
        <div class="form-group"><label>Phone Number</label><input type="tel" name="phone" placeholder="+1 (555) 000-0000" /></div>
        <div class="form-group">
          <label>Selected Package</label>
          <select id="modalTier" name="tier">
            <option value="">— Choose a plan —</option>
            <option value="Free Taste">Free Taste</option>
            <option value="Home Chef">Home Chef — $12/mo</option>
            <option value="Culinary Master">Culinary Master — $29/mo</option>
          </select>
        </div>
        <input type="hidden" id="modalRecipe" name="recipe" value="" />
        <div class="form-check">
          <input type="checkbox" id="privacyCheck" required />
          <label for="privacyCheck">I agree to the <a href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms of Service</a></label>
        </div>
        <button type="submit" class="btn btn-red" style="width:100%;justify-content:center;">Get Instant Access →</button>
      </form>
    </div>
  </div>
</div>

<!-- COOKIE BANNER -->
<div class="cookie-banner" id="cookieBanner">
  <p>We use cookies to enhance your experience, analyze site traffic, and serve personalized content. By continuing, you consent to our use of cookies as described in our <a href="privacy.html">Privacy Policy</a>.</p>
  <div class="cookie-actions">
    <button class="cookie-btn cookie-manage" id="cookieManage">Essential Only</button>
    <button class="cookie-btn cookie-accept" id="cookieAccept">Accept All</button>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-col">
      <div class="footer-brand">Flavor<span>&</span>Form</div>
      <p class="footer-desc">A premier modern culinary brand rooted in geometric precision, bold flavor, and obsessive craft. Based in Washington, DC — cooking for the entire country.</p>
      <div class="footer-socials"><a href="#">IG</a><a href="#">TT</a><a href="#">YT</a><a href="#">PI</a></div>
    </div>
    <div class="footer-col">
      <h4>Navigate</h4>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="recipes.html">Recipes</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="services.html">Services</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Membership</h4>
      <ul>
        <li><a href="#pricing">Free Taste</a></li>
        <li><a href="#pricing">Home Chef — $12/mo</a></li>
        <li><a href="#pricing">Culinary Master — $29/mo</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h4>Legal</h4>
      <ul>
        <li><a href="privacy.html">Privacy Policy</a></li>
        <li><a href="terms.html">Terms of Service</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <div style="margin-top:24px;font-size:0.78rem;color:#555;line-height:1.5;">1200 18th St NW, Suite 400<br>Washington, DC 20036<br>+1-(202) 555-0178</div>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 Flavor & Form LLC. All rights reserved.</span>
    <div class="footer-legal"><a href="privacy.html">Privacy</a><a href="terms.html">Terms</a><a href="contact.html">Contact</a></div>
  </div>
</footer>

<script src="shared.js"></script>
</body>
</html>
