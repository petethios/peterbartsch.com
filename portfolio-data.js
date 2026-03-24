/**
 * Portfolio Case Study Data
 * Single source of truth for all modal content
 */
const portfolioData = [
    {
        id: 1,
        company: "Thios",
        role: "Founder & Lead Designer",
        dates: "Aug 2024 - Present",
        problem: "Between enterprise roles, I tested whether AI could serve as a technical force multiplier — allowing one experienced designer to ship brand, web, 3D, and physical products at startup velocity.",
        description: "Side project proving technical range and AI-augmented design workflows. Not a startup — a capability demonstration.",
        bullets: [
            "Complete product ecosystem in 18 months: brand, 3 websites, 5 CAD shelter variants, physical prototype, handbook generating revenue",
            "AI as technical co-founder: 70% faster prototyping cycles through conversational development",
            "Validated AI as practical force multiplier; any prototype is possible at solo-founder velocity"
        ],
        images: Array.from({ length: 14 }, (_, i) => `img/thios-${String(i + 1).padStart(2, '0')}.png`),
        featured: true
    },
    {
        id: 2,
        company: "John Deere",
        role: "Senior Lead UX; Digital Customer Experience",
        dates: "Aug 2020 - Jul 2024",
        problem: "Force platform-wide data adoption across 500K+ users (farmers without email to autonomous-tractor operators) without destroying trust—enabling $3.8B subscription revenue.",
        description: "Led design strategy across a $38B enterprise's digital customer experience. Operated as senior IC driving cross-org alignment, design system governance, and adoption at 500K+ user scale.",
        bullets: [
            "Profile completion: 34% → 87% in 6 months through multi-channel forced adoption strategy",
            "Unified navigation framework deployed across 8 product lines (web, mobile, embedded)—single customer view",
            "Enterprise design system spanning 40+ teams globally—45% faster design-to-development handoffs",
            "Enabled predictive maintenance, dealer-led service, and $3.8B in AI/Automation subscription revenue"
        ],
        images: Array.from({ length: 14 }, (_, i) => `img/deere-${String(i + 1).padStart(2, '0')}.png`),
        featured: true
    },
    {
        id: 3,
        company: "FourKites",
        role: "Lead UX / Manager",
        dates: "Jan 2017 - Jan 2020",
        problem: "Make customers trust real-time tracking when underlying data is uncertain, incomplete, or conflicting. Reconcile competing incentives between drivers, shippers, and brokers.",
        description: "Founding designer through hypergrowth ($3M→$100M ARR). Built and scaled the design org from 1→10 across US and India. Company acquired for $1.2B in 2022.",
        bullets: [
            "'Never hide uncertainty'—design principle that became foundation for enterprise trust",
            "Predictive analytics 6-12 hours ahead of competitors; 41% customer retention increase",
            "Driver app that realigned incentives: reduced phone interruptions, transparent data sharing",
            "Team scaled 1→10 designers; company acquired for $1.2B (2022)"
        ],
        images: Array.from({ length: 9 }, (_, i) => `img/fourkites-${String(i + 1).padStart(2, '0')}.png`),
        featured: true
    },
    {
        id: 4,
        company: "MavenWave Partners",
        role: "Lead User Experience Designer",
        dates: "Aug 2018 - Aug 2019",
        description: "Agency-side consulting for enterprise cloud migrations. Learning to deliver impact in compressed timelines.",
        bullets: [
            "Led design for 8 enterprise engagements across financial services, manufacturing, and retail; delivered production-ready interfaces in 6-8 week sprints",
            "Created reusable workshop frameworks (design sprints, stakeholder alignment) that became standard methodology across Chicago office",
            "Built internal design system for Google Cloud Platform interfaces; reduced proposal-to-delivery time 30%"
        ],
        images: [],
        featured: false
    },
    {
        id: 5,
        company: "How Weird Street Faire",
        role: "Creative Director",
        dates: "2005 - 2013",
        description: "Annual San Francisco street fair celebrating peace through music and art. Led visual identity and environmental design.",
        bullets: [
            "Designed annual event branding, stage graphics, and environmental installations for 20,000+ attendee street festival",
            "Coordinated with 50+ artists and volunteers to execute cohesive visual experience across 3 city blocks",
            "Created merchandise designs generating revenue for World Peace Through Technology nonprofit"
        ],
        images: Array.from({ length: 8 }, (_, i) => `img/hwsf-${String(i + 1).padStart(2, '0')}.png`),
        featured: false
    },
    {
        id: 6,
        company: "Nokia (HERE Maps)",
        role: "Senior Visual Designer",
        dates: "Jan 2014 - Jan 2016",
        description: "Visual design for HERE Maps web and mobile applications during Nokia's mapping division transition.",
        bullets: [
            "Designed UI components and iconography for HERE Maps web application serving 100M+ monthly users",
            "Created visual specifications bridging design-to-engineering handoff across 4 international development teams",
            "Contributed to design system documentation that survived acquisition by consortium of German automakers"
        ],
        images: [],
        featured: false
    },
    {
        id: 7,
        company: "Gogo Inflight Wi-Fi",
        role: "Senior Visual Designer",
        dates: "Jan 2016 - Aug 2018",
        description: "Design for in-flight entertainment and connectivity experiences across major airline partners.",
        bullets: [
            "Led visual design for entertainment portal serving 25M+ annual passengers across Delta, American, and United",
            "Created white-label design system enabling rapid customization for airline brand requirements",
            "Designed responsive interfaces optimizing for constrained bandwidth and diverse device ecosystems"
        ],
        images: Array.from({ length: 3 }, (_, i) => `img/gogo-${String(i + 1).padStart(2, '0')}.png`),
        featured: false
    },
    {
        id: 8,
        company: "Dig the Pixels / D7TV.com",
        role: "Founder",
        dates: "2003 - 2008",
        description: "Founded creative collective and online video platform in the early days of web video.",
        bullets: [
            "Built one of the first online video platforms for independent content creators pre-YouTube",
            "Grew community to 50,000+ registered users and 2M+ monthly video views",
            "Pioneered creator monetization models through advertising and sponsorship programs"
        ],
        images: [],
        featured: false
    },
    {
        id: 9,
        company: "Cognistar",
        role: "UI Designer",
        dates: "2006 - 2008",
        description: "Early-stage startup building AI-powered search and recommendation systems.",
        bullets: [
            "Designed interfaces for AI-powered content recommendation engine",
            "Created data visualization components for search analytics dashboard",
            "Collaborated with ML engineers to design feedback loops improving algorithm accuracy"
        ],
        images: [],
        featured: false
    },
    {
        id: 10,
        company: "SkyMall.com",
        role: "Web Designer",
        dates: "2001 - 2003",
        description: "E-commerce design for iconic in-flight shopping catalog's digital presence.",
        bullets: [
            "Designed product pages and checkout flows for e-commerce platform",
            "Created email marketing templates driving 15% increase in click-through rates",
            "Built promotional landing pages for seasonal campaigns"
        ],
        images: [],
        featured: false
    },
    {
        id: 11,
        company: "tronicmedia",
        role: "Founder",
        dates: "1999 - 2006",
        description: "Freelance web design and development studio serving small businesses and artists.",
        bullets: [
            "Built 50+ websites for small businesses, musicians, and artists",
            "Specialized in Flash animation and early interactive experiences",
            "Developed client relationships that funded transition to full-time design career"
        ],
        images: [],
        featured: false
    },
    {
        id: 12,
        company: "Life Fitness",
        role: "UI Designer (Contract)",
        dates: "2013",
        description: "Interface design for commercial fitness equipment displays.",
        bullets: [
            "Designed touchscreen interfaces for commercial treadmill and elliptical displays",
            "Created workout program visualizations and progress tracking screens",
            "Optimized UI for sweaty fingers and gym lighting conditions"
        ],
        images: [],
        featured: false
    },
    {
        id: 13,
        company: "Arizona State University",
        role: "BFA, Intermedia",
        dates: "1995 - 1999",
        description: "Interdisciplinary arts degree combining digital media, video, and installation art.",
        bullets: [
            "Studied under digital art pioneers exploring intersection of technology and creative expression",
            "Created interactive installations combining video, sound, and physical computing",
            "Foundation in design thinking and experimental prototyping"
        ],
        images: [],
        featured: false
    },
    {
        id: 14,
        company: "School of the Art Institute of Chicago",
        role: "MFA, Art and Technology Studies",
        dates: "2008 - 2011",
        description: "Graduate research in interactive systems, data visualization, and creative coding.",
        bullets: [
            "Research focus on real-time data visualization and generative systems",
            "Created installations exploring human-computer interaction and embodied interfaces",
            "Teaching assistant for creative coding and interaction design courses",
            "Thesis: Interactive data sculptures responding to environmental inputs"
        ],
        images: Array.from({ length: 3 }, (_, i) => `img/saic-${String(i + 1).padStart(2, '0')}.png`),
        featured: false
    },
    {
        id: 15,
        company: "F. A. Skates",
        role: "Designer",
        dates: "1998 - 2000",
        description: "Skateboard graphics and brand identity for Arizona-based skate company.",
        bullets: [
            "Designed skateboard deck graphics, apparel, and brand collateral",
            "Created catalog layouts and promotional materials",
            "Built early e-commerce presence for direct-to-consumer sales"
        ],
        images: [],
        featured: false
    },
    {
        id: 16,
        company: "Burton Chill Foundation",
        role: "Volunteer Designer",
        dates: "2010 - 2012",
        description: "Pro-bono design work for snowboard industry nonprofit.",
        bullets: [
            "Designed event materials and promotional graphics for youth snowboard programs",
            "Created social media content and email marketing templates",
            "Contributed to annual report design and fundraising materials"
        ],
        images: [],
        featured: false
    }
];

// Make available globally
if (typeof window !== 'undefined') {
    window.portfolioData = portfolioData;
}

// Export for module systems
if (typeof module !== 'undefined' && module.exports) {
    module.exports = portfolioData;
}
