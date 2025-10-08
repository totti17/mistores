<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mistores - متجر متعدد الاستخدامات</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet">
        <style>
            :root {
                --primary: #f05340;
                --secondary: #1b1b1f;
                --accent: #f9b233;
                --muted: #6b6d7a;
                --surface: #ffffff;
                --surface-alt: #f4f4f8;
                --shadow-soft: 0 20px 60px rgba(23, 24, 38, 0.08);
                --radius: 28px;
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                font-family: "Tajawal", system-ui, sans-serif;
                background: linear-gradient(135deg, #fff7f5 0%, #ffffff 100%);
                color: var(--secondary);
                line-height: 1.7;
            }

            a {
                color: inherit;
                text-decoration: none;
            }

            img {
                max-width: 100%;
                display: block;
            }

            header {
                padding: 32px 0 0;
            }

            .wrapper {
                width: min(1200px, 92vw);
                margin: 0 auto;
            }

            .top-bar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background: var(--surface);
                padding: 18px 28px;
                border-radius: var(--radius);
                box-shadow: var(--shadow-soft);
                gap: 24px;
            }

            .logo {
                display: flex;
                align-items: center;
                gap: 12px;
                font-weight: 800;
                font-size: 1.2rem;
            }

            .logo-mark {
                width: 44px;
                height: 44px;
                border-radius: 14px;
                background: radial-gradient(circle at 30% 30%, #ffd1c6 0%, #ff7a5f 60%, #f05340 100%);
                display: grid;
                place-items: center;
                color: #fff;
                font-weight: 800;
                font-size: 1.1rem;
            }

            nav {
                display: flex;
                gap: 28px;
                font-weight: 500;
                color: var(--muted);
            }

            nav a:hover {
                color: var(--primary);
            }

            .top-actions {
                display: flex;
                align-items: center;
                gap: 12px;
            }

            .top-actions button {
                background: var(--secondary);
                color: #fff;
                border: none;
                padding: 12px 22px;
                border-radius: 999px;
                font-weight: 600;
                cursor: pointer;
                transition: transform 0.25s ease, box-shadow 0.25s ease;
            }

            .top-actions button.secondary {
                background: transparent;
                color: var(--secondary);
                border: 1px solid rgba(27, 27, 31, 0.12);
            }

            .top-actions button:hover {
                transform: translateY(-2px);
                box-shadow: 0 18px 30px rgba(27, 27, 31, 0.08);
            }

            .hero {
                margin-top: 48px;
                background: linear-gradient(135deg, rgba(240, 83, 64, 0.12), rgba(240, 172, 72, 0.16));
                border-radius: calc(var(--radius) + 10px);
                padding: 58px 64px;
                display: grid;
                grid-template-columns: 1.1fr 0.9fr;
                gap: 48px;
                align-items: center;
                position: relative;
                overflow: hidden;
            }

            .hero::after {
                content: "";
                position: absolute;
                inset: -60px -40px 40px;
                background: radial-gradient(circle at top left, rgba(240, 83, 64, 0.22), transparent 55%),
                    radial-gradient(circle at bottom right, rgba(249, 178, 51, 0.25), transparent 60%);
                z-index: 0;
            }

            .hero-content {
                position: relative;
                z-index: 2;
            }

            .badge {
                display: inline-flex;
                align-items: center;
                gap: 10px;
                background: #fff;
                padding: 10px 18px;
                border-radius: 999px;
                font-weight: 600;
                color: var(--primary);
                box-shadow: 0 14px 36px rgba(240, 83, 64, 0.16);
                margin-bottom: 20px;
            }

            .badge span {
                display: inline-flex;
                background: rgba(240, 83, 64, 0.12);
                color: var(--primary);
                font-size: 0.75rem;
                padding: 6px 12px;
                border-radius: 999px;
                font-weight: 700;
            }

            .hero h1 {
                font-size: clamp(2.4rem, 3vw + 1rem, 3.5rem);
                margin: 0 0 18px;
                line-height: 1.2;
            }

            .hero p {
                font-size: 1.05rem;
                color: var(--muted);
                margin-bottom: 26px;
            }

            .hero-actions {
                display: flex;
                gap: 16px;
                align-items: center;
            }

            .btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                padding: 14px 26px;
                border-radius: 999px;
                font-weight: 700;
                border: none;
                cursor: pointer;
                transition: transform 0.25s ease, box-shadow 0.25s ease;
            }

            .btn-primary {
                background: var(--secondary);
                color: #fff;
                box-shadow: 0 20px 40px rgba(27, 27, 31, 0.2);
            }

            .btn-outline {
                background: rgba(255, 255, 255, 0.85);
                color: var(--secondary);
                border: 1px solid rgba(27, 27, 31, 0.12);
            }

            .btn:hover {
                transform: translateY(-3px);
            }

            .hero-media {
                position: relative;
                z-index: 1;
            }

            .hero-card {
                background: #fff;
                border-radius: calc(var(--radius) - 4px);
                padding: 26px;
                box-shadow: 0 24px 50px rgba(27, 27, 31, 0.14);
                display: grid;
                gap: 18px;
                transform: rotate(-2deg);
            }

            .hero-card h3 {
                margin: 0;
                font-size: 1.1rem;
                font-weight: 700;
            }

            .hero-card p {
                margin: 0;
                color: var(--muted);
                font-size: 0.95rem;
            }

            .hero-stats {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 12px;
            }

            .stat {
                background: linear-gradient(160deg, rgba(240, 172, 51, 0.1), rgba(255, 255, 255, 0.75));
                border-radius: 18px;
                padding: 16px;
                text-align: center;
            }

            .stat strong {
                display: block;
                font-size: 1.4rem;
                color: var(--secondary);
            }

            .stat span {
                font-size: 0.85rem;
                color: var(--muted);
            }

            section {
                margin: 90px 0 0;
            }

            .section-head {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 32px;
            }

            .section-head h2 {
                margin: 0;
                font-size: 2rem;
            }

            .section-head p {
                margin: 0;
                color: var(--muted);
            }

            .categories {
                display: grid;
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 24px;
            }

            .category-card {
                background: var(--surface);
                border-radius: var(--radius);
                padding: 24px;
                box-shadow: var(--shadow-soft);
                display: flex;
                flex-direction: column;
                gap: 16px;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .category-card:hover {
                transform: translateY(-6px);
                box-shadow: 0 24px 50px rgba(27, 27, 31, 0.1);
            }

            .category-icon {
                width: 58px;
                height: 58px;
                border-radius: 18px;
                background: linear-gradient(135deg, rgba(240, 83, 64, 0.14), rgba(249, 178, 51, 0.2));
                display: grid;
                place-items: center;
                font-weight: 700;
                color: var(--primary);
            }

            .category-card span {
                color: var(--muted);
                font-size: 0.92rem;
            }

            .products-grid {
                display: grid;
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 24px;
            }

            .product-card {
                background: var(--surface);
                border-radius: 26px;
                padding: 22px;
                box-shadow: var(--shadow-soft);
                display: grid;
                gap: 18px;
                position: relative;
                overflow: hidden;
            }

            .product-card::after {
                content: "";
                position: absolute;
                inset: 0;
                background: linear-gradient(180deg, rgba(240, 83, 64, 0.06), transparent 40%);
                pointer-events: none;
            }

            .product-thumb {
                height: 160px;
                border-radius: 20px;
                background: linear-gradient(135deg, rgba(240, 83, 64, 0.08), rgba(249, 178, 51, 0.18));
                display: grid;
                place-items: center;
                font-size: 3rem;
                color: var(--primary);
            }

            .product-info h3 {
                margin: 0 0 6px;
                font-size: 1.1rem;
            }

            .product-info p {
                margin: 0;
                color: var(--muted);
                font-size: 0.9rem;
            }

            .price-tag {
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-weight: 700;
            }

            .price-tag span {
                color: var(--primary);
                font-size: 1.05rem;
            }

            .tag {
                position: absolute;
                top: 20px;
                left: 22px;
                padding: 6px 12px;
                border-radius: 999px;
                background: rgba(240, 83, 64, 0.1);
                color: var(--primary);
                font-size: 0.75rem;
                font-weight: 700;
            }

            .promo-banner {
                margin-top: 80px;
                background: linear-gradient(130deg, #1b1b1f 0%, #f05340 100%);
                color: #fff;
                border-radius: calc(var(--radius) + 12px);
                padding: 48px 52px;
                display: grid;
                grid-template-columns: 1fr auto;
                align-items: center;
                gap: 36px;
            }

            .promo-banner h3 {
                margin: 0 0 12px;
                font-size: 2rem;
            }

            .promo-banner p {
                margin: 0;
                max-width: 520px;
                color: rgba(255, 255, 255, 0.82);
            }

            .promo-banner .btn {
                background: #fff;
                color: var(--secondary);
                box-shadow: none;
            }

            .features {
                display: grid;
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 24px;
            }

            .feature-card {
                background: var(--surface);
                border-radius: var(--radius);
                padding: 28px;
                box-shadow: var(--shadow-soft);
                display: grid;
                gap: 12px;
            }

            .feature-card strong {
                font-size: 1.1rem;
            }

            .newsletter {
                margin: 100px 0 120px;
                background: var(--surface);
                border-radius: calc(var(--radius) + 8px);
                padding: 52px;
                box-shadow: var(--shadow-soft);
                display: grid;
                grid-template-columns: 1.1fr 0.9fr;
                align-items: center;
                gap: 40px;
            }

            .newsletter h3 {
                margin: 0 0 14px;
                font-size: 1.9rem;
            }

            .newsletter p {
                margin: 0 0 26px;
                color: var(--muted);
            }

            .newsletter form {
                display: flex;
                gap: 14px;
                background: var(--surface-alt);
                padding: 10px;
                border-radius: 999px;
            }

            .newsletter input {
                flex: 1;
                border: none;
                background: transparent;
                padding: 12px 18px;
                font-family: inherit;
                font-size: 0.95rem;
                outline: none;
            }

            footer {
                background: #101014;
                color: rgba(255, 255, 255, 0.76);
                padding: 70px 0 40px;
            }

            .footer-grid {
                width: min(1200px, 92vw);
                margin: 0 auto;
                display: grid;
                grid-template-columns: 2fr repeat(3, minmax(0, 1fr));
                gap: 40px;
            }

            .footer-grid h4 {
                color: #fff;
                margin-top: 0;
            }

            .footer-grid ul {
                list-style: none;
                margin: 0;
                padding: 0;
                display: grid;
                gap: 12px;
            }

            .footer-bottom {
                width: min(1200px, 92vw);
                margin: 48px auto 0;
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 0.85rem;
                color: rgba(255, 255, 255, 0.6);
            }

            @media (max-width: 1024px) {
                nav {
                    display: none;
                }

                .hero {
                    grid-template-columns: 1fr;
                    padding: 46px 34px;
                }

                .hero-card {
                    transform: rotate(0deg);
                }

                .categories,
                .products-grid,
                .features {
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                }

                .newsletter,
                .promo-banner {
                    grid-template-columns: 1fr;
                }

                .promo-banner {
                    text-align: center;
                }

                .promo-banner .btn {
                    justify-self: center;
                }
            }

            @media (max-width: 640px) {
                header {
                    padding-top: 24px;
                }

                .top-bar {
                    flex-direction: column;
                    align-items: flex-start;
                    gap: 16px;
                }

                .hero {
                    padding: 36px 24px;
                }

                .hero-actions {
                    flex-direction: column;
                    align-items: stretch;
                }

                .categories,
                .products-grid,
                .features {
                    grid-template-columns: 1fr;
                }

                .newsletter form {
                    flex-direction: column;
                    border-radius: 24px;
                    padding: 18px;
                }

                .newsletter input {
                    padding: 14px;
                    border-radius: 16px;
                    background: #fff;
                }

                .footer-grid {
                    grid-template-columns: 1fr;
                }

                .footer-bottom {
                    flex-direction: column;
                    gap: 12px;
                    text-align: center;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <div class="wrapper">
                <div class="top-bar">
                    <div class="logo">
                        <div class="logo-mark">Mi</div>
                        <div>
                            <div>Mistores</div>
                            <small style="color: var(--muted); font-weight: 500;">وجهتك للتجارة الإلكترونية</small>
                        </div>
                    </div>
                    <nav>
                        <a href="#">الرئيسية</a>
                        <a href="#">المتجر</a>
                        <a href="#">العروض</a>
                        <a href="#">المدونة</a>
                        <a href="#">الدعم</a>
                    </nav>
                    <div class="top-actions">
                        <button class="secondary">تسجيل الدخول</button>
                        <button>أنشئ حسابًا</button>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <div class="wrapper">
                <section class="hero">
                    <div class="hero-content">
                        <div class="badge">
                            أحدث الإصدارات
                            <span>مجموعات الصيف 2024</span>
                        </div>
                        <h1>تجربة تسوّق حديثة تلهم كل عملية شراء.</h1>
                        <p>
                            ابتكرنا Mistores ليمنحك منصة قوية لإدارة منتجاتك، عرض العروض الموسمية، وتقديم تجربة مستخدم فاخرة تلائم جمهورك العربي.
                        </p>
                        <div class="hero-actions">
                            <button class="btn btn-primary">ابدأ مجانًا الآن</button>
                            <button class="btn btn-outline">استكشف التصاميم</button>
                        </div>
                    </div>
                    <div class="hero-media">
                        <div class="hero-card">
                            <h3>لوحة تحكم غنية</h3>
                            <p>تابع المبيعات، المخزون، وسلوك الزوار في واجهة أنيقة وسهلة التخصيص.</p>
                            <div class="hero-stats">
                                <div class="stat">
                                    <strong>+12k</strong>
                                    <span>منتج نشط</span>
                                </div>
                                <div class="stat">
                                    <strong>98%</strong>
                                    <span>رضا العملاء</span>
                                </div>
                                <div class="stat">
                                    <strong>24/7</strong>
                                    <span>دعم فني</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="section-head">
                        <h2>أبرز التصنيفات</h2>
                        <p>اكتشف مجموعات منسقة بعناية لتناسب كل ذوق.</p>
                    </div>
                    <div class="categories">
                        <div class="category-card">
                            <div class="category-icon">🧥</div>
                            <strong>أزياء عصرية</strong>
                            <span>قطع مختارة للأناقة اليومية بتفاصيل فاخرة.</span>
                        </div>
                        <div class="category-card">
                            <div class="category-icon">🧴</div>
                            <strong>جمال وعناية</strong>
                            <span>منتجات طبيعية معتمدة لبشرة صحية ومتألقة.</span>
                        </div>
                        <div class="category-card">
                            <div class="category-icon">🏠</div>
                            <strong>ديكور منزلي</strong>
                            <span>لمسات دافئة تحوّل المساحات إلى تجربة مريحة.</span>
                        </div>
                        <div class="category-card">
                            <div class="category-icon">⌚</div>
                            <strong>اكسسوارات فاخرة</strong>
                            <span>تفاصيل دقيقة تكمل إطلالتك وتبرز شخصيتك.</span>
                        </div>
                    </div>
                </section>

                <section>
                    <div class="section-head">
                        <h2>الأكثر مبيعًا هذا الأسبوع</h2>
                        <p>منتجات اخترناها بناءً على تقييمات الزبائن وتجربة الشراء.</p>
                    </div>
                    <div class="products-grid">
                        <div class="product-card">
                            <div class="tag">خصم 20%</div>
                            <div class="product-thumb">👟</div>
                            <div class="product-info">
                                <h3>حذاء رياضي بخامة شبكية</h3>
                                <p>مرونة عالية مع دعم إضافي لراحة يومية.</p>
                            </div>
                            <div class="price-tag">
                                <span>299 ر.س</span>
                                <small>شامل الضريبة</small>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-thumb">👜</div>
                            <div class="product-info">
                                <h3>حقيبة كتف جلد نباتي</h3>
                                <p>تصميم مستوحى من الموضة الباريسية بتفاصيل ذهبية.</p>
                            </div>
                            <div class="price-tag">
                                <span>449 ر.س</span>
                                <small>توصيل مجاني</small>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-thumb">💄</div>
                            <div class="product-info">
                                <h3>مجموعة أحمر شفاه مطفي</h3>
                                <p>ثبات 12 ساعة مع ترطيب يدوم طوال اليوم.</p>
                            </div>
                            <div class="price-tag">
                                <span>189 ر.س</span>
                                <small>هدية مرفقة</small>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="tag">الأكثر شعبية</div>
                            <div class="product-thumb">🕯️</div>
                            <div class="product-info">
                                <h3>شمعة عطرية بعبق العود</h3>
                                <p>مزيج فاخر يملأ المكان بأجواء هادئة ودافئة.</p>
                            </div>
                            <div class="price-tag">
                                <span>129 ر.س</span>
                                <small>متوفر الآن</small>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="promo">
                    <div class="promo-banner">
                        <div>
                            <h3>إطلاق منصة Mistores PRO</h3>
                            <p>
                                حل متكامل لإدارة متجرك على القنوات المتعددة، مع تكاملات دفع وشحن سريعة، وأدوات تسويق ذكية تزيد من ولاء عملائك.
                            </p>
                        </div>
                        <button class="btn">ترقية إلى الخطة الاحترافية</button>
                    </div>
                </section>

                <section>
                    <div class="section-head">
                        <h2>لماذا يثق بنا التجار؟</h2>
                        <p>نحن ندعم نموك بمزيج من التقنية والتجربة المتخصصة.</p>
                    </div>
                    <div class="features">
                        <div class="feature-card">
                            <strong>قابلية تخصيص كاملة</strong>
                            <span>ابنِ متجرًا يعكس علامتك التجارية من الألوان وحتى المحتوى، مع أدوات سحب وإفلات ذكية.</span>
                        </div>
                        <div class="feature-card">
                            <strong>تحليلات معمّقة</strong>
                            <span>اطّلع على مؤشرات الأداء الأساسية، وتتبع رحلات العملاء من أول زيارة وحتى الشراء المتكرر.</span>
                        </div>
                        <div class="feature-card">
                            <strong>تكاملات محلية</strong>
                            <span>خيارات دفع وشحن تناسب السوق العربي، مع دعم الفواتير الإلكترونية والضرائب.</span>
                        </div>
                    </div>
                </section>

                <section class="newsletter">
                    <div>
                        <h3>اشترك في نشرتنا لتصلك أحدث المجموعات.</h3>
                        <p>نشاركك عروضًا حصرية، دروسًا في إدارة التجارة الإلكترونية، وأخبارًا عن منتجات جديدة أسبوعيًا.</p>
                        <form>
                            <input type="email" placeholder="أدخل بريدك الإلكتروني" aria-label="البريد الإلكتروني">
                            <button type="submit" class="btn btn-primary">اشترك الآن</button>
                        </form>
                    </div>
                    <div style="background: linear-gradient(135deg, rgba(240, 83, 64, 0.12), rgba(240, 172, 51, 0.18)); border-radius: var(--radius); padding: 36px; box-shadow: inset 0 0 0 1px rgba(240, 83, 64, 0.08);">
                        <h4 style="margin-top: 0;">خطط مرنة لكل مرحلة</h4>
                        <p style="color: var(--muted);">
                            اختر الباقة التي تناسب حجم أعمالك، مع إمكانية الترقية في أي وقت ودون تكاليف خفية.
                        </p>
                        <ul style="margin: 0; padding-right: 18px; color: var(--secondary); display: grid; gap: 10px;">
                            <li>لوحة تحكم باللغة العربية والإنجليزية.</li>
                            <li>واجهات RTL مهيأة للهواتف.</li>
                            <li>دعم فني من خبراء التجارة الإلكترونية.</li>
                        </ul>
                    </div>
                </section>
            </div>
        </main>

        <footer>
            <div class="footer-grid">
                <div>
                    <div class="logo" style="color: #fff; margin-bottom: 18px;">
                        <div class="logo-mark" style="background: rgba(255, 255, 255, 0.1); color: #fff;">Mi</div>
                        <div>
                            <div>Mistores</div>
                            <small style="color: rgba(255, 255, 255, 0.6); font-weight: 500;">منصة تجارة إلكترونية عربية</small>
                        </div>
                    </div>
                    <p style="margin: 0; max-width: 320px;">
                        نبني تجارب تسوق متجددة تلائم ثقافة المنطقة وتدعم نمو أعمالك عبر الإنترنت.
                    </p>
                </div>
                <div>
                    <h4>الشركة</h4>
                    <ul>
                        <li><a href="#">من نحن</a></li>
                        <li><a href="#">قصص النجاح</a></li>
                        <li><a href="#">الوظائف</a></li>
                    </ul>
                </div>
                <div>
                    <h4>الموارد</h4>
                    <ul>
                        <li><a href="#">مركز المعرفة</a></li>
                        <li><a href="#">دليل الإعداد</a></li>
                        <li><a href="#">ورش العمل</a></li>
                    </ul>
                </div>
                <div>
                    <h4>الدعم</h4>
                    <ul>
                        <li><a href="#">التواصل معنا</a></li>
                        <li><a href="#">الأسئلة الشائعة</a></li>
                        <li><a href="#">سياسة الخصوصية</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© {{ date('Y') }} Mistores. جميع الحقوق محفوظة.</span>
                <span>مصمم بعناية ليتماشى مع اللغة العربية واتجاه RTL.</span>
            </div>
        </footer>
    </body>
</html>
