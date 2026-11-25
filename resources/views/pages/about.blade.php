@extends('layouts.app', ['title' => 'About', 'description' => 'A decade in the British Army with REME, now Group CEO of The Crownshield Group.'])

@section('content')
    <x-page-header eyebrow="About Alvin"
        title='A decade equipping soldiers. <span class="text-sky italic">Now, equipping forces.</span>'
        lead="Dual British and Nigerian national from Edo State. Ten years with the Royal Electrical and Mechanical Engineers. Group CEO of The Crownshield Group." />

    <section class="py-24 lg:py-32">
        <div class="container-x grid gap-16 lg:grid-cols-12">
            <aside class="lg:col-span-4">
                <div class="aspect-[4/5] overflow-hidden rounded-[1.5rem] lg:sticky lg:top-28">
                    <x-portrait />
                </div>
            </aside>

            <div class="space-y-7 text-lg leading-relaxed text-ink-soft lg:col-span-7 lg:col-start-6" data-reveal-group>
                <h2 class="display text-4xl text-ink" data-reveal>Service in the British Army</h2>
                <p data-reveal>Alvin served a decade in the British Army with the Royal Electrical and Mechanical Engineers (REME) as a Technical Support Specialist, leaving in the position of Acting Technical Quartermaster Sergeant (TQMS), the post responsible for a unit's entire equipment holding. His job was to equip fighting units: every battle group, battalion and garrison he served had the right kit, in the right condition, at the right time.</p>
                <p data-reveal>He managed the unit Equipment Table, the formal list of everything a unit is entitled to hold, and ordered equipment, spares and weapons parts through official military supply chains. He was accountable for budgets worth millions of pounds sterling, and every item had to be justified, tracked and audited.</p>
                <p data-reveal>Within the Quartermaster's department he made sure the unit's equipment and accounts passed external Logistic Support Inspections and Equipment Care Inspections, the independent audits the Army uses to test whether equipment is accounted for, maintained and fit for operations.</p>
                <p data-reveal>A qualified Skill at Arms instructor, he also worked in the unit armoury, inspecting, storing and accounting for service rifles and making sure ammunition was held safely and to regulation.</p>

                <h2 class="display pt-10 text-4xl text-ink" data-reveal>Why he leads Crownshield</h2>
                <p data-reveal>Defence buyers in Nigeria need more than a supplier. They need someone who understands the end user, the equipment lifecycle and the accountability that comes with public money. Through The Crownshield Group, with operations in Nigeria and the United Kingdom, Alvin equips and supports security and defence organisations, with all procurement carried out through properly licensed and authorised channels in full compliance with Nigerian and UK law.</p>
            </div>
        </div>
    </section>

    <section class="bg-mist py-24 lg:py-32">
        <div class="container-x">
            <div class="max-w-2xl" data-reveal>
                <p class="eyebrow">Recognition</p>
                <h2 class="display mt-5 text-4xl sm:text-5xl">Honoured for getting it right.</h2>
            </div>
            <div class="mt-14 grid gap-6 md:grid-cols-2" data-reveal-group>
                <article class="rounded-2xl bg-white p-10" data-reveal>
                    <p class="eyebrow">36 Engineer Regiment</p>
                    <h3 class="mt-4 font-serif text-2xl">Commanding Officer's Coin</h3>
                    <p class="mt-4 leading-relaxed text-ink-soft">Awarded in recognition of his work helping the regiment pass its Logistic Support Inspection.</p>
                </article>
                <article class="rounded-2xl bg-white p-10" data-reveal>
                    <p class="eyebrow">Operation TOSCA, Cyprus</p>
                    <h3 class="mt-4 font-serif text-2xl">UN Force Commander's Commendation</h3>
                    <p class="mt-4 leading-relaxed text-ink-soft">For making sure the battle group had every piece of equipment it needed on United Nations operations.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="py-24 lg:py-32">
        <div class="container-x grid gap-14 lg:grid-cols-12">
            <div class="lg:col-span-4" data-reveal>
                <p class="eyebrow">Background at a glance</p>
                <h2 class="display mt-5 text-4xl">The record.</h2>
            </div>
            <ol class="divide-y divide-line border-y border-line lg:col-span-8" data-reveal-group>
                @foreach ([
                    ['British Army, REME', 'Technical Support Specialist for ten years; left as Acting Technical Quartermaster Sergeant.'],
                    ['Quartermaster\'s department', 'Logistic Support Inspection and Equipment Care Inspection audits.'],
                    ['Equipment and procurement', 'Unit Equipment Table management and multi-million-pound budgets.'],
                    ['Skill at Arms instructor', 'Armoury inspection, storage and ammunition management.'],
                    ['1st Shield Security Services Ltd', 'Founder of an SIA licensed security company in the United Kingdom.'],
                    ['The Crownshield Group', 'Group CEO in Abuja for about nine years.'],
                    ['Africa Unconquered Foundation', 'Co-Founder, supporting wounded, injured and sick Nigerian military personnel.'],
                    ['UNIPASS Nigeria', 'CEO, widening access to international higher education.'],
                ] as [$t, $d])
                    <li class="grid gap-2 py-6 sm:grid-cols-[16rem_1fr] sm:gap-8" data-reveal>
                        <p class="font-serif text-lg text-ink">{{ $t }}</p>
                        <p class="text-ink-soft">{{ $d }}</p>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    @include('partials.cta')
@endsection
