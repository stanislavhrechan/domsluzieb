@extends('layouts.info')

@section('title', 'Terms & Conditions')

@section('content')
<div class="bg-white">
    <div class="px-5 md:px-20 py-21">
        <div class="mb-16">
            <span class="text-xs tracking-[0.3em] font-[DMMono] uppercase text-neutral-400">
                Legal
            </span>

            <h1 class="mt-4 text-5xl md:text-7xl leading-[0.92] tracking-tight font-light">
                Terms & Conditions
            </h1>
        </div>

        <div class="space-y-12">
            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    1. Acceptance of Terms
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    By accessing and using this website, you agree to comply with
                    these Terms and all applicable laws and regulations.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    2. Website Purpose
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    This website provides information about services, facilities,
                    and activities related to Dom Služieb Stará Ľubovňa.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    3. Intellectual Property
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    All content including text, graphics, logos, images,
                    and design elements is protected by applicable intellectual
                    property laws.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    4. User Responsibilities
                </h2>

                <ul class="space-y-2 text-gray-700">
                    <li>• Use the website lawfully</li>
                    <li>• Provide accurate information</li>
                    <li>• Respect website security</li>
                    <li>• Avoid disruptive activities</li>
                </ul>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    5. Disclaimer
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Information on this website is provided for general
                    informational purposes only. We do not guarantee the
                    completeness or accuracy of all content.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    6. Limitation of Liability
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    Dom Služieb Stará Ľubovňa shall not be liable for any damages
                    resulting from the use of this website.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    7. External Links
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    We may provide links to third-party websites. We are not
                    responsible for their content or privacy practices.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    8. Modifications
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    We reserve the right to update these Terms at any time.
                    Changes become effective upon publication on this page.
                </p>
            </section>

            <section>
                <h2 class="mb-4 uppercase text-[15px] tracking-wide">
                    9. Governing Law
                </h2>

                <p class="text-gray-700 leading-relaxed">
                    These Terms are governed by the laws of the Slovak Republic.
                </p>
            </section>
        </div>
    </div>
</div>
<x-home-section.footer/>
@endsection