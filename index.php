<?php
// Shaik Rameez Basha — Portfolio Data Layer
$projects = [
    [
        'id' => 'rtm',
        'title' => 'Remote Treatment Monitoring Intelligence Layer',
        'category' => 'APPLIED AI / HEALTHCARE WORKFLOW INTELLIGENCE',
        'number' => '01',
        'metrics' => [
            'Attribution Precision' => '>92.4%',
            'Dossier Latency' => '<120ms',
            'Clinician Agreement' => '89.6%'
        ],
        'details' => [
            'overview' => 'An experimental clinician-support layer evaluating patient image inputs (resolution and lighting metrics) and projecting Grad-CAM gradient attributions directly onto clinician review dashboards.',
            'architecture' => 'Image Ingestion Pipeline ➔ Lighting & Resolution Evaluator ➔ ResNet Backbone ➔ Grad-CAM Layer ➔ Clinician Dashboard API.',
            'engineering' => 'Leveraged PyTorch hooks to capture gradient activations mid-inference, outputting coordinates to a lightweight JSON API endpoint.',
            'challenges' => 'Ensuring the gradient activations were translated to pixel-exact coordinates on the frontend relative to different image ratios.',
            'outcome' => 'Successfully prototyped a workflow that gives clinicians confidence in the model\'s triage decision, reducing manual image auditing by 40%.'
        ],
        'tags' => ['Python', 'PyTorch', 'Explainable AI', 'FastAPI', 'React', 'TypeScript'],
        'blueprint_svg' => '<svg viewBox="0 0 100 100" class="w-full h-full text-[#8C6D4F]/20"><circle cx="50" cy="50" r="35" fill="none" stroke="currentColor" stroke-width="0.5" stroke-dasharray="2 3" /><circle cx="50" cy="50" r="20" fill="none" stroke="currentColor" stroke-width="0.5" /><line x1="50" y1="10" x2="50" y2="90" stroke="currentColor" stroke-width="0.25" stroke-dasharray="4 4" /><line x1="10" y1="50" x2="90" y2="50" stroke="currentColor" stroke-width="0.25" stroke-dasharray="4 4" /></svg>'
    ],
    [
        'id' => 'biovision',
        'title' => 'BioVision-Path (Cell Vision)',
        'category' => 'BIOMEDICAL COMPUTER VISION & EXPLAINABILITY',
        'number' => '02',
        'metrics' => [
            'Smear Detection mAP' => '0.885',
            'Segmentation IoU' => '0.842',
            'Embedding Search' => 'k-NN (k=5)'
        ],
        'details' => [
            'overview' => 'A production-quality explainable multi-task biomedical computer vision pipeline. Performs colorectal tissue classification (ResNet-18) with Grad-CAM overlays, breast cancer cell nuclei segmentation (U-Net), smear cell detection (Faster R-CNN), and embedding KNN image search.',
            'architecture' => 'Biomedical Image Input ➔ Multi-task Encoder ➔ Task Heads (Segmentation, Object Detection, Classification) ➔ Grad-CAM Attribution Overlay ➔ Gradio Frontend.',
            'engineering' => 'Engineered a unified feature extractor that shares layers across segmentation and detection heads, optimizing inference latency.',
            'challenges' => 'Balancing loss functions of different heads during training to prevent one task from dominating gradient updates.',
            'outcome' => 'Deployed live on Hugging Face Spaces demonstrating how complex model outputs can be presented transparently.'
        ],
        'tags' => ['PyTorch', 'ONNX', 'Explainable AI', 'FastAPI', 'Gradio', 'Python'],
        'blueprint_svg' => '<svg viewBox="0 0 100 100" class="w-full h-full text-[#8C6D4F]/20"><rect x="20" y="20" width="60" height="60" fill="none" stroke="currentColor" stroke-width="0.5" stroke-dasharray="3 3" /><circle cx="50" cy="50" r="15" fill="none" stroke="currentColor" stroke-width="0.5" /><line x1="20" y1="20" x2="80" y2="80" stroke="currentColor" stroke-width="0.25" /><line x1="80" y1="20" x2="20" y2="80" stroke="currentColor" stroke-width="0.25" /></svg>'
    ],
    [
        'id' => 'codeorigin',
        'title' => 'CodeOrigin (AST Auditor)',
        'category' => 'DEVELOPER INFRASTRUCTURE & METRIC ANALYSIS',
        'number' => '03',
        'metrics' => [
            'Traversal Speed' => '400k lines/s',
            'SBOM Compilation' => 'CycloneDX v1.5',
            'Similarity Resolution' => 'MinHash Jaccard'
        ],
        'details' => [
            'overview' => 'A technical due diligence and repository intelligence platform that audits codebase acquisitions by compiling CycloneDX SBOMs, analyzing cyclic package dependencies using abstract syntax trees, and calculating shingle/MinHash similarity indexes to detect code duplication.',
            'architecture' => 'Repo Cloner ➔ Python AST Parser ➔ Shingle/Hash Generator ➔ Relational Dependency Mapper ➔ Compliance Report API.',
            'engineering' => 'Implemented parallel worker processes to traverse large target repositories asynchronously, parsing AST nodes without executing files.',
            'challenges' => 'Detecting circular dependency loops across thousands of modules efficiently without triggering recursion overflows.',
            'outcome' => 'Prototyped a robust static analysis backend capable of compiling CycloneDX SBOMs in seconds.'
        ],
        'tags' => ['FastAPI', 'Python AST', 'React', 'PostgreSQL', 'TypeScript'],
        'blueprint_svg' => '<svg viewBox="0 0 100 100" class="w-full h-full text-[#8C6D4F]/20"><path d="M 50 10 L 85 45 L 65 45 L 65 90 L 35 90 L 35 45 L 15 45 Z" fill="none" stroke="currentColor" stroke-width="0.5" stroke-dasharray="2 2" /><circle cx="50" cy="30" r="5" fill="none" stroke="currentColor" stroke-width="0.5" /></svg>'
    ],
    [
        'id' => 'campusbuddy',
        'title' => 'CampusBuddy (Biometrics)',
        'category' => 'MOBILE PORTALS & ONNX WEB RUNTIMES',
        'number' => '04',
        'metrics' => [
            'Face Detection' => 'YuNet (ONNX)',
            'Face Recognition' => 'SFace (ONNX)',
            'Client Verification' => '<180ms'
        ],
        'details' => [
            'overview' => 'A student administration portal with biometric authentication, integrating YuNet face detection and SFace recognition models utilizing ONNX web runtimes for client-side verification.',
            'architecture' => 'CapacitorJS Shell ➔ Browser Camera Feed ➔ YuNet Face Detector (ONNX) ➔ SFace Embeddings Matcher ➔ MongoDB Atlas Authentication.',
            'engineering' => 'Optimized ONNX runtimes inside CapacitorJS webview threads to run face coordinate mapping at 30fps client-side.',
            'challenges' => 'Minimizing the footprint of neural weights for fast downloading and local caching on mobile devices.',
            'outcome' => 'Created a seamless cardless attendance prototype with localized biometrics, keeping user facial data private on device.'
        ],
        'tags' => ['React', 'Vite', 'CapacitorJS', 'FastAPI', 'MongoDB Atlas', 'ONNX'],
        'blueprint_svg' => '<svg viewBox="0 0 100 100" class="w-full h-full text-[#8C6D4F]/20"><circle cx="50" cy="40" r="18" fill="none" stroke="currentColor" stroke-width="0.5" /><path d="M 20 85 A 30 30 0 0 1 80 85" fill="none" stroke="currentColor" stroke-width="0.5" stroke-dasharray="2 3" /><rect x="15" y="15" width="70" height="70" fill="none" stroke="currentColor" stroke-width="0.25" /></svg>'
    ],
    [
        'id' => 'sih',
        'title' => 'SIH College Management Platform',
        'category' => 'STATE MACHINES & WORKFLOW MANAGEMENT',
        'number' => '05',
        'metrics' => [
            'Assignment Speed' => '<50ms/node',
            'Queue Compliance' => '100%',
            'State Transitions' => 'Deterministic'
        ],
        'details' => [
            'overview' => 'Internal Smart India Hackathon college management and evaluation system coordinating coordinator registrations, judge evaluation assignments, spreadsheets compilation, activation tokens, and state-machine transitions.',
            'architecture' => 'FastAPI Routers ➔ Judge Assignment Queue ➔ State-Machine Transition Engine ➔ SQLAlchemy ORM ➔ PostgreSQL Database.',
            'engineering' => 'Designed a thread-safe deterministic assignment pipeline that maps hackathon projects to judges based on category alignments.',
            'challenges' => 'Preventing double-allocation of projects when multiple coordinators run spreadsheet compiles concurrently.',
            'outcome' => 'Successfully managed college-level registrations and evaluation tracking without data collations.'
        ],
        'tags' => ['FastAPI', 'Python', 'SQLAlchemy', 'PostgreSQL', 'React', 'TypeScript'],
        'blueprint_svg' => '<svg viewBox="0 0 100 100" class="w-full h-full text-[#8C6D4F]/20"><rect x="10" y="10" width="25" height="25" fill="none" stroke="currentColor" stroke-width="0.5" /><rect x="65" y="10" width="25" height="25" fill="none" stroke="currentColor" stroke-width="0.5" /><rect x="37.5" y="65" width="25" height="25" fill="none" stroke="currentColor" stroke-width="0.5" /><path d="M 22.5 35 L 22.5 50 L 50 50 L 50 65" fill="none" stroke="currentColor" stroke-width="0.25" stroke-dasharray="2 2" /><path d="M 77.5 35 L 77.5 50 L 50 50" fill="none" stroke="currentColor" stroke-width="0.25" stroke-dasharray="2 2" /></svg>'
    ]
];

$experiences = [
    [
        'company' => 'AfterQuery',
        'role' => 'Full Stack Engineer',
        'period' => 'May 2026 – Present',
        'bullets' => [
            'Configure repository static analysis hooks, AST node traversals, FastAPI endpoints, and modular datagrids.',
            'Employ async worker channels to audit source code components structures.',
            'Conduct architectural analysis on codebase systems to ensure compliance with technical specifications.'
        ]
    ],
    [
        'company' => 'RotorDyn',
        'role' => 'Full Stack Engineer',
        'period' => 'June 2026 – July 2026',
        'bullets' => [
            'Built a SaaS-based rotor and bearing vibration analysis platform using React, Vite, FastAPI, Supabase, PostgreSQL, and Plotly.js.',
            'Engineered telemetry data ingestion pipelines and custom visualization widgets using Python, Pandas, and FFT-based diagnostics.'
        ]
    ]
];

$skills = [
    [
        'name' => 'AI / ML',
        'skills' => [
            'Python',
            'Artificial Intelligence',
            'Machine Learning',
            'Deep Learning',
            'Computer Vision',
            'Natural Language Processing',
            'Transformers',
            'Explainable AI',
            'PyTorch',
            'ONNX',
            'Grad-CAM'
        ]
    ],
    [
        'name' => 'GENERATIVE AI',
        'skills' => [
            'Generative AI',
            'LLM Applications',
            'Prompt Engineering',
            'Retrieval-Augmented Generation',
            'Embeddings',
            'AI Evaluation',
            'AI Assistants',
            'Human-in-the-Loop AI',
            'Intelligent Workflow Systems'
        ]
    ],
    [
        'name' => 'ENGINEERING',
        'skills' => [
            'FastAPI',
            'React',
            'TypeScript',
            'Full-Stack Development',
            'Backend Development',
            'Node.js',
            'Express.js',
            'REST APIs',
            'WebSockets',
            'PostgreSQL',
            'Supabase',
            'MongoDB',
            'Docker',
            'Authentication',
            'Testing'
        ]
    ],
    [
        'name' => 'DATA / ANALYTICS',
        'skills' => [
            'Pandas',
            'Plotly.js',
            'D3.js',
            'CSV/Excel Processing',
            'Data Processing',
            'Telemetry Processing',
            'FFT Analysis',
            'Performance Optimization'
        ]
    ]
];

$architectureLayers = [
    [
        'id' => 'frontend',
        'title' => 'FRONTEND / PRESENTATION',
        'description' => 'Declarative UI interfaces, responsive layouts, data visualization dashboards, and active client-side parsing engines.',
        'skills' => ['React', 'TypeScript', 'Tailwind CSS', 'Vite', 'Framer Motion', 'Plotly.js / D3.js']
    ],
    [
        'id' => 'backend',
        'title' => 'API / BUSINESS SERVICES',
        'description' => 'RESTful API endpoints, low-latency WebSockets pipelines, async background queue coordination, and authentication gateways.',
        'skills' => ['Python', 'FastAPI', 'Node.js', 'Express', 'Redis Task Queues', 'JWT Keys']
    ],
    [
        'id' => 'data',
        'title' => 'DATA / STORAGE ENGINE',
        'description' => 'Relational data structures, document-store aggregations, caching nodes, and structured dataset preprocessing pipelines.',
        'skills' => ['PostgreSQL', 'MongoDB', 'Supabase', 'Redis Cache', 'SQL Schemas']
    ],
    [
        'id' => 'ai',
        'title' => 'AI / ANALYTICS CORE',
        'description' => 'Explainable AI models, PyTorch neural networks, SHAP features attribution pipelines, and machinery vibration FFT parsers.',
        'skills' => ['Explainable AI', 'SHAP / LIME', 'PyTorch Models', 'Spectral FFT Analytics']
    ],
    [
        'id' => 'deployment',
        'title' => 'DEPLOYMENT / SYSTEM OPS',
        'description' => 'Containerized build packaging, secure isolated sandbox execution clusters, and cloud platform setups.',
        'skills' => ['Docker Containers', 'CI/CD Pipelines', 'Supabase Edge', 'Cloud Deployment']
    ]
];
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="mypic.png" />
    
    <!-- SEO Specifications -->
    <title>Shaik Rameez Basha — AI/ML &amp; GenAI Engineer</title>
    <meta name="description" content="AI/ML &amp; GenAI Engineer building production-oriented intelligent systems across LLM applications, computer vision, explainable AI, NLP, and full-stack engineering." />
    
    <!-- External Typography Sheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        display: ['Space Grotesk', 'sans-serif'],
                        mono: ['IBM Plex Mono', 'monospace'],
                    }
                }
            }
        }
    </script>
    
    <style>
        body {
            background-color: #050505;
            color: #E8DFD8;
            overflow-x: hidden;
        }
        .tech-grid-pattern {
            background-image: 
                linear-gradient(to right, rgba(140, 109, 79, 0.04) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(140, 109, 79, 0.04) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        .glow-accent {
            box-shadow: 0 0 15px rgba(212, 175, 55, 0.6);
        }
        .scroll-stack-runway {
            position: relative;
            width: 100%;
        }
        .scroll-stack-card {
            position: sticky;
            top: 15vh;
            transform-origin: top center;
            transition: transform 0.1s ease-out, filter 0.2s ease;
        }
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #0E0C0A;
        }
        ::-webkit-scrollbar-thumb {
            background: rgba(140, 109, 79, 0.3);
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #D4AF37;
        }
        
        /* Print Styles for Dossier Modal */
        @media print {
            body * {
                visibility: hidden;
            }
            #quickview-modal, #quickview-modal * {
                visibility: visible;
            }
            #quickview-modal {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                background: white !important;
                color: black !important;
            }
        }
    </style>
</head>
<body class="antialiased">

    <!-- 1. Custom Spring Cursor -->
    <div id="custom-cursor" class="fixed top-0 left-0 pointer-events-none z-50 rounded-full border border-[#D4AF37]/50 flex items-center justify-center backdrop-blur-[0.5px] transition-all duration-75 opacity-0 sm:opacity-100" style="width: 10px; height: 10px; transform: translate(-100px, -100px); background-color: rgba(232, 223, 216, 0.95);"></div>

    <!-- 2. Navbar -->
    <nav class="fixed top-0 left-0 w-full z-40 bg-black/85 border-b border-[#8C6D4F]/15 backdrop-blur-md px-6 sm:px-12 lg:px-20 py-4 flex items-center justify-between">
        <a href="#home" class="text-xs sm:text-sm font-semibold tracking-[0.35em] uppercase text-[#EAD8C7] hover:opacity-75 transition-opacity">
            RAMEEZ.
        </a>
        <div class="hidden md:flex items-center space-x-8 text-[11px] tracking-[0.28em] font-light uppercase text-[#C4B5A5]">
            <a href="#about" class="hover:text-[#FFF5EB] transition-colors relative group py-1">ABOUT<span class="absolute bottom-0 left-0 w-0 h-[1px] bg-[#D4AF37]/50 transition-all duration-300 group-hover:w-full"></span></a>
            <a href="#work" class="hover:text-[#FFF5EB] transition-colors relative group py-1">WORK<span class="absolute bottom-0 left-0 w-0 h-[1px] bg-[#D4AF37]/50 transition-all duration-300 group-hover:w-full"></span></a>
            <a href="#intelligence" class="hover:text-[#FFF5EB] transition-colors relative group py-1">INTELLIGENCE<span class="absolute bottom-0 left-0 w-0 h-[1px] bg-[#D4AF37]/50 transition-all duration-300 group-hover:w-full"></span></a>
            <a href="#expertise" class="hover:text-[#FFF5EB] transition-colors relative group py-1">EXPERTISE<span class="absolute bottom-0 left-0 w-0 h-[1px] bg-[#D4AF37]/50 transition-all duration-300 group-hover:w-full"></span></a>
            <a href="#architecture" class="hover:text-[#FFF5EB] transition-colors relative group py-1">SYSTEMS<span class="absolute bottom-0 left-0 w-0 h-[1px] bg-[#D4AF37]/50 transition-all duration-300 group-hover:w-full"></span></a>
            <a href="#experience" class="hover:text-[#FFF5EB] transition-colors relative group py-1">EXPERIENCE<span class="absolute bottom-0 left-0 w-0 h-[1px] bg-[#D4AF37]/50 transition-all duration-300 group-hover:w-full"></span></a>
            <a href="#research" class="hover:text-[#FFF5EB] transition-colors relative group py-1">RESEARCH<span class="absolute bottom-0 left-0 w-0 h-[1px] bg-[#D4AF37]/50 transition-all duration-300 group-hover:w-full"></span></a>
        </div>
        <div class="flex items-center space-x-4">
            <button onclick="toggleQuickView(true)" class="text-[10px] tracking-[0.24em] font-light uppercase px-3 py-1.5 border border-[#8C6D4F]/30 hover:border-[#D4AF37] text-[#BFA895] hover:text-[#EAD8C7] transition-all duration-300 bg-[#0E0C0A]/40">
                SUMMARY
            </button>
            <a href="#contact" class="group flex items-center space-x-2 text-[11px] tracking-[0.24em] font-light uppercase py-2 px-4 border border-[#8C6D4F]/50 hover:border-[#D4AF37] text-[#EAD8C7] transition-all duration-300 bg-[#0E0C0A]">
                <span>LET'S TALK</span>
                <span class="transform transition-transform duration-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 text-xs">↗</span>
            </a>
        </div>
    </nav>

    <!-- 3. Hero Section -->
    <header id="home" class="relative w-full min-h-screen bg-black text-[#E8DFD8] overflow-hidden flex items-center pt-24 pb-16 px-6 sm:px-12 lg:px-20 border-b border-[#8C6D4F]/15">
        <div class="absolute top-1/4 left-1/3 w-[36rem] h-[36rem] bg-[#D4AF37]/5 rounded-full blur-[180px] pointer-events-none"></div>
        <div class="absolute bottom-1/4 right-1/4 w-[30rem] h-[30rem] bg-[#8C6D4F]/5 rounded-full blur-[170px] pointer-events-none"></div>
        <div class="absolute inset-0 tech-grid-pattern opacity-[0.12] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center relative z-10">
            <!-- Left Column -->
            <div class="lg:col-span-7 flex flex-col items-start text-left">
                <div class="flex items-center space-x-3 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-[#D4AF37] glow-accent animate-pulse"></span>
                    <span class="text-[10px] sm:text-[11px] font-medium tracking-[0.28em] text-[#C4B29E] uppercase font-sans">
                        AI/ML &bull; GENAI &bull; FULL-STACK
                    </span>
                </div>

                <div class="relative mb-5 select-none">
                    <h1 class="text-5xl sm:text-7xl md:text-8xl lg:text-[7.2rem] tracking-tight uppercase leading-[0.85] font-bold font-display">
                        <span class="block text-transparent bg-clip-text bg-gradient-to-b from-[#FFFFFF] via-[#D5CBC0] to-[#605448] drop-shadow-[0_4px_12px_rgba(0,0,0,0.85)]">I BUILD</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-b from-[#F7E7C4] via-[#C99E5D] to-[#543B1A] drop-shadow-[0_8px_25px_rgba(201,158,93,0.35)]">INTELLIGENT</span>
                        <span class="block text-transparent bg-clip-text bg-gradient-to-b from-[#DFBE8A] via-[#9B7640] to-[#342410] drop-shadow-[0_10px_30px_rgba(155,118,64,0.4)]">SYSTEMS.</span>
                    </h1>
                </div>

                <div class="text-xs sm:text-sm md:text-[14px] font-light text-[#A8988B] leading-[1.85] tracking-wide max-w-xl mb-10 font-sans">
                    <p>AI/ML &amp; GenAI Engineer building production-oriented intelligent applications across LLM workflows, computer vision, explainable AI, backend engineering, and full-stack systems.</p>
                </div>

                <div class="flex flex-wrap items-center gap-4 sm:gap-6 font-sans">
                    <a href="#work" class="relative inline-flex items-center space-x-3 px-6 sm:px-7 py-3.5 border border-[#8C6D4F] bg-[#120F0C]/80 hover:border-[#D4AF37] text-[#EAD8C7] hover:text-[#FFF5EB] text-[11px] font-medium tracking-[0.24em] uppercase transition-all duration-300 shadow-[0_0_25px_rgba(212,175,55,0.18)]">
                        <span>EXPLORE MY WORK</span>
                        <span class="text-xs">↗</span>
                    </a>
                    <button onclick="toggleQuickView(true)" class="relative inline-flex items-center space-x-2 px-6 sm:px-7 py-3.5 border border-[#8C6D4F]/40 hover:border-[#8C6D4F] text-[#BFA895] hover:text-[#EAD8C7] text-[11px] font-medium tracking-[0.24em] uppercase transition-all duration-300 bg-transparent">
                        <span>DOWNLOAD RESUME</span>
                        <span class="text-xs">↓</span>
                    </button>
                </div>

                <div class="flex items-center space-x-6 mt-12 text-[10px] font-mono tracking-widest text-[#8C6D4F]">
                    <a href="https://github.com/Basharameez" target="_blank" class="hover:text-[#D4AF37] transition-colors">GITHUB</a>
                    <span class="opacity-30">/</span>
                    <a href="https://www.linkedin.com/in/shaik-rameezbasha-151740286/" target="_blank" class="hover:text-[#D4AF37] transition-colors">LINKEDIN</a>
                </div>
            </div>

            <!-- Right Column: Rotating rings with centered portrait -->
            <div class="lg:col-span-5 w-full flex justify-center items-center relative select-none">
                <div class="w-full max-w-[320px] sm:max-w-[400px] aspect-square relative flex items-center justify-center">
                    <svg viewBox="0 0 200 200" class="w-full h-full text-[#8C6D4F]/30 animate-[spin_100s_linear_infinite]">
                        <circle cx="100" cy="100" r="85" fill="none" stroke="currentColor" stroke-width="0.5" stroke-dasharray="3 6" />
                        <circle cx="100" cy="100" r="60" fill="none" stroke="currentColor" stroke-width="0.5" stroke-dasharray="6 4" />
                        <circle cx="100" cy="100" r="44" fill="none" stroke="currentColor" stroke-width="0.5" stroke-dasharray="2 2" />
                        <line x1="100" y1="5" x2="100" y2="195" stroke="currentColor" stroke-width="0.25" stroke-dasharray="5 5" />
                        <line x1="5" y1="100" x2="195" y2="100" stroke="currentColor" stroke-width="0.25" stroke-dasharray="5 5" />
                    </svg>

                    <div class="absolute w-[220px] h-[220px] flex items-center justify-center">
                        <svg viewBox="0 0 100 100" class="w-full h-full text-[#D4AF37]/80">
                            <circle cx="50" cy="10" r="3" fill="#D4AF37" class="animate-pulse" />
                            <circle cx="10" cy="50" r="3.5" fill="#8C6D4F" />
                            <circle cx="50" cy="90" r="3" fill="#D4AF37" class="animate-pulse" />
                            <circle cx="90" cy="50" r="3.5" fill="#8C6D4F" />
                            <path d="M 50 10 L 90 50 L 50 90 L 10 50 Z" fill="none" stroke="currentColor" stroke-width="0.25" />
                        </svg>
                    </div>

                    <div class="absolute w-36 h-36 rounded-full overflow-hidden border border-[#8C6D4F]/50 shadow-[0_0_35px_rgba(212,175,55,0.18)] bg-[#0E0C0A] flex items-center justify-center transition-all duration-500 hover:border-[#D4AF37] hover:shadow-[0_0_45px_rgba(212,175,55,0.3)] group">
                        <img src="mypic.png" alt="Shaik Rameez Basha Portrait" class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105" />
                    </div>

                    <div class="absolute -bottom-4 flex flex-col items-center justify-center font-mono text-[8px] text-[#A8988B]/60 tracking-wider">
                        <span>// SYSTEM CONFIG</span>
                        <span class="text-[#D4AF37] font-semibold mt-0.5">AI_CORE_ACTIVE</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 4. About Section -->
    <section id="about" class="relative w-full min-h-screen bg-black text-[#E8DFD8] py-24 lg:py-32 px-6 sm:px-12 lg:px-20 overflow-hidden flex items-center border-b border-[#8C6D4F]/15">
        <div class="absolute top-1/4 left-10 w-[32rem] h-[32rem] bg-[#D4AF37]/[0.03] rounded-full blur-[160px] pointer-events-none"></div>
        <div class="absolute inset-0 tech-grid-pattern opacity-[0.08] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto w-full relative z-10">
            <div class="flex items-center space-x-4 mb-10">
                <span class="text-[11px] font-medium tracking-[0.35em] uppercase text-[#D4AF37] font-sans">01 / CORE PHILOSOPHY</span>
                <div class="w-20 h-[1px] bg-gradient-to-r from-[#D4AF37]/80 to-transparent"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                <!-- Left Column -->
                <div class="lg:col-span-7 flex flex-col justify-center text-left">
                    <div class="relative mb-6 select-none">
                        <h2 class="text-5xl sm:text-6xl md:text-7xl lg:text-[5.4rem] tracking-tight uppercase leading-[0.88] font-bold font-display">
                            <span class="block text-transparent bg-clip-text bg-gradient-to-b from-[#FFFFFF] via-[#D5CBC0] to-[#605448] drop-shadow-[0_4px_10px_rgba(0,0,0,0.85)]">I DON'T JUST WRITE CODE.</span>
                            <span class="block text-transparent bg-clip-text bg-gradient-to-b from-[#F7E7C4] via-[#C99E5D] to-[#543B1A] drop-shadow-[0_8px_25px_rgba(201,158,93,0.3)]">I BUILD WHAT'S NEXT.</span>
                        </h2>
                    </div>

                    <p class="text-xs sm:text-sm md:text-[14px] font-light text-[#B3A497] leading-[1.85] tracking-wide mb-8 max-w-xl font-sans">
                        I'm <span class="text-[#F3DBB3] font-medium font-mono">Shaik Rameez Basha</span>, an AI/ML &amp; GenAI Engineer | Full-Stack Engineer. My work sits at the intersection of AI models and robust software engineering. I build end-to-end intelligent systems, focusing on explainable predictions, structured API services, and clean presentation layers.
                    </p>

                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 pt-6 pb-6 border-t border-[#8C6D4F]/25 font-display">
                        <div class="flex flex-col">
                            <span class="text-2xl sm:text-3xl font-light text-[#F4EBE2] tracking-tight font-bold">7.79</span>
                            <span class="text-[8.5px] font-medium tracking-[0.2em] uppercase text-[#A8988B] mt-0.5 font-mono">B.Tech CGPA</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl sm:text-3xl font-light text-[#D4AF37] tracking-tight font-bold">CS-AI</span>
                            <span class="text-[8.5px] font-medium tracking-[0.2em] uppercase text-[#A8988B] mt-0.5 font-mono">Specialization</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl sm:text-3xl font-light text-[#F4EBE2] tracking-tight font-bold">IEEE</span>
                            <span class="text-[8.5px] font-medium tracking-[0.2em] uppercase text-[#A8988B] mt-0.5 font-mono">Research Author</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-2xl sm:text-3xl font-light text-[#D4AF37] tracking-tight font-bold">LEETCODE</span>
                            <span class="text-[8.5px] font-medium tracking-[0.2em] uppercase text-[#A8988B] mt-0.5 font-mono">Algo Solver</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 pt-6 border-t border-[#8C6D4F]/25 w-full font-mono">
                        <span class="text-[9.5px] tracking-[0.2em] text-[#8C6D4F] uppercase mb-1 block">// PIPELINE ARCHITECTURE FLOW</span>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2.5 py-1 text-[9px] border border-[#8C6D4F]/20 bg-[#0E0C0A] text-[#A8988B] rounded-sm uppercase tracking-widest">05 USER</span>
                            <span class="px-2.5 py-1 text-[9px] border border-[#8C6D4F]/20 bg-[#0E0C0A] text-[#A8988B] rounded-sm uppercase tracking-widest">04 UI</span>
                            <span class="px-2.5 py-1 text-[9px] border border-[#8C6D4F]/20 bg-[#0E0C0A] text-[#A8988B] rounded-sm uppercase tracking-widest">03 DATA</span>
                            <span class="px-2.5 py-1 text-[9px] border border-[#8C6D4F]/20 bg-[#0E0C0A] text-[#A8988B] rounded-sm uppercase tracking-widest">02 API</span>
                            <span class="px-2.5 py-1 text-[9px] border border-[#8C6D4F]/20 bg-[#0E0C0A] text-[#A8988B] rounded-sm uppercase tracking-widest">01 MODEL</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: 3D Tilting Card -->
                <div class="lg:col-span-5 flex items-center justify-center relative perspective-[1400px]">
                    <div id="about-card" class="relative w-full max-w-[320px] aspect-[3/4] rounded-sm border border-[#8C6D4F]/40 bg-[#0E0C0A] p-2.5 overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.85)] transition-all duration-300 hover:border-[#D4AF37] group">
                        <div class="absolute top-0 left-0 w-3.5 h-3.5 border-t border-l border-[#8C6D4F]/50 group-hover:border-[#D4AF37] transition-colors"></div>
                        <div class="absolute bottom-0 right-0 w-3.5 h-3.5 border-b border-r border-[#8C6D4F]/50 group-hover:border-[#D4AF37] transition-colors"></div>

                        <div class="w-full h-full overflow-hidden relative rounded-sm bg-black pointer-events-none" style="transform: translateZ(30px);">
                            <img src="mypic.png" alt="Shaik Rameez Basha Portrait" class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105" />
                            <div id="about-spotlight" class="absolute inset-0 pointer-events-none mix-blend-color-dodge opacity-0 transition-opacity duration-300"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Works Section (ScrollStack) -->
    <section id="work" class="relative w-full bg-black py-24 lg:py-32 px-6 sm:px-12 lg:px-20 border-b border-[#8C6D4F]/15">
        <div class="max-w-7xl mx-auto w-full">
            <div class="flex items-center justify-between mb-16">
                <div class="flex items-center space-x-4">
                    <span class="text-[11px] font-medium tracking-[0.35em] uppercase text-[#D4AF37] font-sans">02 / FLAGSHIP PROJECTS</span>
                    <div class="w-20 h-[1px] bg-[#8C6D4F]/40"></div>
                </div>
                <span class="text-[9px] font-mono text-[#8C6D4F] tracking-widest">// STACK RUNWAY LAYER</span>
            </div>

            <!-- Scroll Runway -->
            <div class="scroll-stack-runway flex flex-col gap-[20vh] pb-[10vh]">
                <?php foreach ($projects as $index => $project): ?>
                    <div class="scroll-stack-card w-full max-w-5xl mx-auto bg-[#0A0806] border border-[#8C6D4F]/25 rounded-sm p-6 sm:p-10 shadow-[0_30px_60px_rgba(0,0,0,0.9)] overflow-hidden">
                        <div class="absolute top-0 left-0 w-full h-[1.5px] bg-gradient-to-r from-transparent via-[#D4AF37]/50 to-transparent"></div>
                        
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                            <!-- Left Detail Node -->
                            <div class="lg:col-span-8 flex flex-col justify-between h-full">
                                <div>
                                    <div class="flex items-center space-x-3 text-[10px] font-mono text-[#8C6D4F] tracking-wider mb-4">
                                        <span class="text-[#D4AF37] font-semibold">MODULE // <?php echo $project['number']; ?></span>
                                        <span>&bull;</span>
                                        <span><?php echo $project['category']; ?></span>
                                    </div>
                                    <h3 class="text-3xl sm:text-4xl lg:text-[2.7rem] uppercase font-bold text-transparent bg-clip-text bg-gradient-to-b from-[#FFFFFF] to-[#8E8071] leading-[1.05] tracking-tight font-display mb-6">
                                        <?php echo $project['title']; ?>
                                    </h3>
                                </div>

                                <div class="grid grid-cols-3 gap-4 border-t border-b border-[#8C6D4F]/15 py-4 my-6 font-mono text-[9px] text-[#A8988B]">
                                    <?php foreach ($project['metrics'] as $key => $val): ?>
                                        <div>
                                            <div class="text-[8px] text-[#8C6D4F] uppercase tracking-widest"><?php echo $key; ?></div>
                                            <div class="text-xs text-[#D4AF37] font-semibold mt-1"><?php echo $val; ?></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>

                                <div class="flex flex-wrap gap-2 mb-6">
                                    <?php foreach ($project['tags'] as $tag): ?>
                                        <span class="px-2.5 py-0.5 text-[8.5px] font-mono border border-[#8C6D4F]/20 bg-[#0E0C0A] text-[#8C6D4F] rounded-full uppercase tracking-wider"><?php echo $tag; ?></span>
                                    <?php endforeach; ?>
                                </div>

                                <div class="flex space-x-4 font-sans">
                                    <button onclick="openProjectFocus('<?php echo $project['id']; ?>')" class="px-5 py-2.5 bg-transparent border border-[#8C6D4F]/60 hover:border-[#D4AF37] text-[10px] font-medium tracking-[0.2em] text-[#EAD8C7] hover:text-white uppercase transition-colors rounded-sm cursor-pointer">
                                        CASE STUDY
                                    </button>
                                </div>
                            </div>

                            <!-- Right Blueprint -->
                            <div class="lg:col-span-4 flex justify-center items-center h-48 sm:h-64 relative border border-[#8C6D4F]/10 rounded-sm bg-black/60 p-4">
                                <div class="absolute inset-0 tech-grid-pattern opacity-10 pointer-events-none"></div>
                                <div class="w-full h-full flex items-center justify-center max-w-[200px] relative">
                                    <?php echo $project['blueprint_svg']; ?>
                                </div>
                                <div class="absolute bottom-2 right-3 font-mono text-[7.5px] text-[#8C6D4F]">// SCHEMATIC_FLOW_LAYER</div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 6. GenAI Section -->
    <section id="intelligence" class="relative w-full bg-black py-24 px-6 sm:px-12 lg:px-20 border-b border-[#8C6D4F]/15">
        <div class="max-w-7xl mx-auto w-full">
            <div class="flex items-center space-x-4 mb-16">
                <span class="text-[11px] font-medium tracking-[0.35em] uppercase text-[#D4AF37] font-sans">03 / INTELLIGENCE LAYER</span>
                <div class="w-20 h-[1px] bg-[#8C6D4F]/40"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Left: Flowchart -->
                <div class="lg:col-span-7">
                    <h3 class="text-3xl font-display font-semibold mb-2 uppercase text-[#FFF5EB]">BEYOND THE MODEL</h3>
                    <p class="text-[11px] font-mono text-[#8C6D4F] tracking-wider uppercase mb-8">// CLICK PIPELINE NODES TO AUDIT LAYER CAPABILITIES</p>
                    
                    <div class="flex flex-col space-y-4">
                        <button onclick="setGenAINode(0)" id="node-0" class="w-full p-4 text-left border border-[#D4AF37] bg-[#120F0C] transition-colors rounded-sm flex justify-between items-center group">
                            <span class="font-mono text-xs text-[#D4AF37]">01 / INPUT TRIAGE (IMAGE &amp; RESOLUTION GATE)</span>
                            <span class="text-xs text-[#D4AF37]">Active</span>
                        </button>
                        <button onclick="setGenAINode(1)" id="node-1" class="w-full p-4 text-left border border-[#8C6D4F]/20 bg-[#0E0C0A] hover:border-[#D4AF37]/50 transition-colors rounded-sm flex justify-between items-center group">
                            <span class="font-mono text-xs text-[#A8988B] group-hover:text-white transition-colors">02 / EMBEDDINGS VECTOR SEARCH</span>
                            <span class="text-xs text-[#8C6D4F]">Standby</span>
                        </button>
                        <button onclick="setGenAINode(2)" id="node-2" class="w-full p-4 text-left border border-[#8C6D4F]/20 bg-[#0E0C0A] hover:border-[#D4AF37]/50 transition-colors rounded-sm flex justify-between items-center group">
                            <span class="font-mono text-xs text-[#A8988B] group-hover:text-white transition-colors">03 / IN-CONTEXT PROMPTING WORKFLOW</span>
                            <span class="text-xs text-[#8C6D4F]">Standby</span>
                        </button>
                        <button onclick="setGenAINode(3)" id="node-3" class="w-full p-4 text-left border border-[#8C6D4F]/20 bg-[#0E0C0A] hover:border-[#D4AF37]/50 transition-colors rounded-sm flex justify-between items-center group">
                            <span class="font-mono text-xs text-[#A8988B] group-hover:text-white transition-colors">04 / OUTPUT VALIDAION SCHEMA SHIELD</span>
                            <span class="text-xs text-[#8C6D4F]">Standby</span>
                        </button>
                    </div>
                </div>

                <!-- Right: Description Panel -->
                <div class="lg:col-span-5 bg-[#0E0C0A] border border-[#8C6D4F]/20 rounded-sm p-6 sm:p-8 min-h-[300px] relative">
                    <div class="absolute inset-0 tech-grid-pattern opacity-10 pointer-events-none"></div>
                    <span class="text-[9px] font-mono text-[#8C6D4F] tracking-widest uppercase block mb-6">// FLOW SPECIFICATIONS PANEL</span>
                    
                    <div id="genai-spec-content">
                        <h4 class="text-xl font-bold font-display uppercase text-[#D4AF37] mb-4">01 / INPUT TRIAGE (IMAGE &amp; RESOLUTION GATE)</h4>
                        <p class="text-xs font-light text-[#B3A497] leading-[1.85] font-sans">Evaluates patient images client-side before processing, checking resolution, lighting metrics, and image orientation limits to reject corrupt payloads early.</p>
                    </div>
    </section>

    <!-- 4. Tech Matrix Section -->
    <section id="expertise" class="relative w-full bg-black text-[#E8DFD8] py-24 lg:py-32 px-6 sm:px-12 lg:px-20 overflow-hidden border-b border-[#8C6D4F]/15">
        <div class="absolute inset-0 tech-grid-pattern opacity-[0.08] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto w-full relative z-10 text-left mb-16">
            <div class="flex items-center space-x-4 mb-5">
                <span class="text-[11px] font-medium tracking-[0.35em] uppercase text-[#D4AF37] font-sans">
                    04 / TECH MATRIX
                </span>
                <div class="w-20 h-[1px] bg-gradient-to-r from-[#D4AF37]/80 via-[#8C6D4F]/40 to-transparent"></div>
            </div>
            
            <h2 class="text-5xl sm:text-6xl md:text-7xl lg:text-[5.5rem] tracking-tight uppercase leading-[0.85] select-none font-bold font-display">
                <span class="block text-transparent bg-clip-text bg-gradient-to-b from-[#FFFFFF] via-[#D5CBC0] to-[#605448] drop-shadow-[0_4px_12px_rgba(0,0,0,0.8)]">
                    ARCHITECTURAL MASTERY.
                </span>
                <span class="block text-transparent bg-clip-text bg-gradient-to-b from-[#F7E7C4] via-[#C99E5D] to-[#543B1A] drop-shadow-[0_8px_25px_rgba(201,158,93,0.35)]">
                    PRECISION APPLIED.
                </span>
            </h2>
        </div>

        <div class="max-w-7xl mx-auto w-full relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Left Side: Skills Catalog Categories -->
            <div class="lg:col-span-8 grid grid-cols-1 md:grid-cols-2 gap-6 text-left">
                <?php foreach ($skills as $category): ?>
                    <div class="bg-[#0E0C0A] border border-[#8C6D4F]/25 rounded-sm p-6 flex flex-col gap-4 relative group">
                        <!-- Corner brackets -->
                        <div class="absolute top-0 left-0 w-2.5 h-2.5 border-t border-l border-[#8C6D4F]/30"></div>
                        <div class="absolute bottom-0 right-0 w-2.5 h-2.5 border-b border-r border-[#8C6D4F]/30"></div>

                        <h3 class="text-xs font-semibold tracking-widest text-[#EAD8C7] uppercase border-b border-[#8C6D4F]/20 pb-2.5 flex items-center gap-2 font-sans">
                            <svg class="w-3.5 h-3.5 text-[#D4AF37]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                            <?php echo $category['name']; ?>
                        </h3>
                        
                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($category['skills'] as $skill): ?>
                                <button
                                    onmouseenter="hoverSkill('<?php echo htmlspecialchars($skill); ?>')"
                                    onmouseleave="unhoverSkill()"
                                    class="skill-badge text-[10px] font-mono px-3 py-1.5 rounded-sm border bg-black/40 border-[#8C6D4F]/35 text-[#A8988B] hover:border-[#8C6D4F] hover:text-white transition-all duration-200 cursor-crosshair"
                                    data-skill="<?php echo htmlspecialchars($skill); ?>"
                                >
                                    <?php echo $skill; ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Right Side: Dynamic Project Linkage Dashboard -->
            <div class="lg:col-span-4 lg:sticky lg:top-28 text-left">
                <div class="bg-[#0E0C0A] border border-[#8C6D4F]/25 rounded-sm p-6 flex flex-col gap-6 relative">
                    <!-- Corner brackets -->
                    <div class="absolute top-0 left-0 w-2.5 h-2.5 border-t border-l border-[#D4AF37]/50"></div>
                    <div class="absolute bottom-0 right-0 w-2.5 h-2.5 border-b border-r border-[#D4AF37]/50"></div>

                    <div>
                        <h3 class="text-xs font-semibold tracking-widest text-[#EAD8C7] uppercase pb-2.5 border-b border-[#8C6D4F]/20 flex items-center gap-2 font-sans">
                            <svg class="w-3.5 h-3.5 text-[#D4AF37]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"></circle><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline></svg>
                            RELATIONSHIP LINKAGE
                        </h3>
                        <p class="text-[11px] text-[#A8988B] leading-relaxed mt-3 font-light font-sans">
                            Hover over a technology badge on the left. The project slots below will dynamically highlight to reveal where that specific asset was deployed.
                        </p>
                    </div>

                    <!-- List of projects to highlight -->
                    <div class="flex flex-col gap-3">
                        <?php foreach ($projects as $project): ?>
                            <div
                                id="linkage-project-<?php echo $project['id']; ?>"
                                class="linkage-project-card p-3 rounded-sm border border-[#8C6D4F]/25 bg-[#050403] transition-all duration-300"
                                data-techs="<?php echo htmlspecialchars(implode(',', $project['tags'])); ?>"
                            >
                                <div class="flex justify-between items-center">
                                    <span class="text-[10px] font-mono font-bold uppercase tracking-wider"><?php echo $project['title']; ?></span>
                                    <span class="linkage-badge hidden text-[8px] font-mono font-bold text-[#D4AF37] bg-[#D4AF37]/10 border border-[#D4AF37]/20 px-1.5 py-0.5 rounded uppercase animate-pulse">
                                        LINKED
                                    </span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Trace status indicators -->
                    <div class="text-[9.5px] font-mono text-[#8C6D4F] flex items-center gap-2 border-t border-[#8C6D4F]/15 pt-4">
                        <svg id="tracing-spinner" class="w-3.5 h-3.5 text-[#D4AF37]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        <span id="tracing-status">STATUS: WAITING FOR HOVER</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. System Architectures Section -->
    <section id="architecture" class="relative w-full bg-black text-[#E8DFD8] py-24 lg:py-32 px-6 sm:px-12 lg:px-20 overflow-hidden border-b border-[#8C6D4F]/15">
        <div class="absolute inset-0 tech-grid-pattern opacity-[0.08] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto w-full relative z-10 text-left mb-16">
            <div class="flex items-center space-x-4 mb-5">
                <span class="text-[11px] font-medium tracking-[0.35em] uppercase text-[#D4AF37] font-sans">
                    05 / SYSTEM ARCHITECTURES
                </span>
                <div class="w-20 h-[1px] bg-gradient-to-r from-[#D4AF37]/80 via-[#8C6D4F]/40 to-transparent"></div>
            </div>
            
            <h2 class="text-5xl sm:text-6xl md:text-7xl lg:text-[5.5rem] tracking-tight uppercase leading-[0.85] select-none font-bold font-display">
                <span class="block text-transparent bg-clip-text bg-gradient-to-b from-[#FFFFFF] via-[#D5CBC0] to-[#605448] drop-shadow-[0_4px_12px_rgba(0,0,0,0.8)]">
                    SYSTEM ARCHITECTURES.
                </span>
                <span class="block text-transparent bg-clip-text bg-gradient-to-b from-[#F7E7C4] via-[#C99E5D] to-[#543B1A] drop-shadow-[0_8px_25px_rgba(201,158,93,0.35)]">
                    HOW I CONSTRUCT.
                </span>
            </h2>
        </div>

        <div class="max-w-7xl mx-auto w-full relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            <!-- Left Side: Clickable Stack of Layers -->
            <div class="lg:col-span-6 flex flex-col gap-3 text-left">
                <?php foreach ($architectureLayers as $layer): ?>
                    <button
                        onclick="setArchitectureLayer('<?php echo $layer['id']; ?>')"
                        id="arch-btn-<?php echo $layer['id']; ?>"
                        class="arch-layer-btn p-4 text-left transition-all duration-300 rounded-sm border flex items-center justify-between cursor-pointer relative group <?php echo $layer['id'] === 'frontend' ? 'border-[#D4AF37] bg-[#120F0C] shadow-[0_0_15px_rgba(212,175,55,0.12)]' : 'bg-[#0E0C0A] border-[#8C6D4F]/25 hover:border-[#8C6D4F]'; ?>"
                    >
                        <!-- Micro pins -->
                        <div class="absolute top-0 left-0 w-2 h-2 border-t border-l border-[#8C6D4F]/30"></div>
                        <div class="absolute bottom-0 right-0 w-2 h-2 border-b border-r border-[#8C6D4F]/30"></div>

                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 rounded-sm flex items-center justify-center bg-black border border-[#8C6D4F]/30">
                                <?php if ($layer['id'] === 'frontend'): ?>
                                    <svg class="w-4 h-4 text-[#D4AF37]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                                <?php elseif ($layer['id'] === 'backend'): ?>
                                    <svg class="w-4 h-4 text-[#D4AF37]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
                                <?php elseif ($layer['id'] === 'data'): ?>
                                    <svg class="w-4 h-4 text-[#D4AF37]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path><path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"></path></svg>
                                <?php elseif ($layer['id'] === 'ai'): ?>
                                    <svg class="w-4 h-4 text-[#D4AF37]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="15" x2="23" y2="15"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="15" x2="4" y2="15"></line></svg>
                                <?php else: ?>
                                    <svg class="w-4 h-4 text-[#D4AF37]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                <?php endif; ?>
                            </div>
                            <div>
                                <h3 class="text-xs font-semibold tracking-widest text-white uppercase group-hover:text-[#F7E7C4] transition-colors font-sans">
                                    <?php echo $layer['title']; ?>
                                </h3>
                                <p class="text-[9px] text-[#A8988B] mt-0.5 uppercase tracking-widest font-mono">
                                    LAYER: <?php echo $layer['id']; ?>
                                </p>
                            </div>
                        </div>
                        <svg class="w-4 h-4 text-[#8C6D4F] arch-arrow <?php echo $layer['id'] === 'frontend' ? 'hidden' : ''; ?>" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Right Side: Active layer specifications -->
            <div class="lg:col-span-6 h-full text-left">
                <div class="bg-[#0E0C0A] border border-[#8C6D4F]/25 rounded-sm p-6 min-h-[340px] h-full flex flex-col justify-between relative">
                    <!-- Corner pins -->
                    <div class="absolute top-0 left-0 w-2.5 h-2.5 border-t border-l border-[#D4AF37]/50"></div>
                    <div class="absolute bottom-0 right-0 w-2.5 h-2.5 border-b border-r border-[#D4AF37]/50"></div>

                    <div class="flex flex-col gap-4">
                        <span class="text-[9px] font-mono font-bold text-[#D4AF37] tracking-widest uppercase border-b border-[#8C6D4F]/20 pb-2.5 block">
                            ACTIVE COMPLIANCE REPORT // LAYER_SPEC
                        </span>
                        
                        <h3 id="arch-spec-title" class="text-lg text-white tracking-wider uppercase font-semibold font-display">
                            FRONTEND / PRESENTATION
                        </h3>
                        
                        <p id="arch-spec-desc" class="text-xs text-[#B3A497] leading-relaxed font-sans font-light">
                            Declarative UI interfaces, responsive layouts, data visualization dashboards, and active client-side parsing engines.
                        </p>

                        <!-- Technologies mapped inside the layer -->
                        <div class="mt-4">
                            <h4 class="text-[9px] font-mono font-bold text-[#8C6D4F] tracking-widest uppercase mb-3">
                                INTEGRATED TOOLSETS
                            </h4>
                            <div id="arch-spec-skills" class="flex flex-wrap gap-2">
                                <span class="text-[10px] font-mono bg-black border border-[#8C6D4F]/25 text-[#EAD8C7] px-2.5 py-1 rounded-sm uppercase tracking-wider">React</span>
                                <span class="text-[10px] font-mono bg-black border border-[#8C6D4F]/25 text-[#EAD8C7] px-2.5 py-1 rounded-sm uppercase tracking-wider">TypeScript</span>
                                <span class="text-[10px] font-mono bg-black border border-[#8C6D4F]/25 text-[#EAD8C7] px-2.5 py-1 rounded-sm uppercase tracking-wider">Tailwind CSS</span>
                                <span class="text-[10px] font-mono bg-black border border-[#8C6D4F]/25 text-[#EAD8C7] px-2.5 py-1 rounded-sm uppercase tracking-wider">Vite</span>
                                <span class="text-[10px] font-mono bg-black border border-[#8C6D4F]/25 text-[#EAD8C7] px-2.5 py-1 rounded-sm uppercase tracking-wider">Framer Motion</span>
                                <span class="text-[10px] font-mono bg-black border border-[#8C6D4F]/25 text-[#EAD8C7] px-2.5 py-1 rounded-sm uppercase tracking-wider">Plotly.js / D3.js</span>
                            </div>
                        </div>
                    </div>

                    <div class="text-[8px] font-mono text-[#8C6D4F]/60 border-t border-[#8C6D4F]/15 pt-4 mt-6 flex justify-between">
                        <span id="arch-spec-module">MODULE ID: Layer-FRONTEND</span>
                        <span>STANDARDS CODE: POSIX_COMPLIANT</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Experience & Telemetry Section -->
    <section id="experience" class="relative w-full bg-black py-24 px-6 sm:px-12 lg:px-20 border-b border-[#8C6D4F]/15">
        <div class="max-w-7xl mx-auto w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Left Column: Chronology -->
                <div class="lg:col-span-6">
                    <div class="flex items-center space-x-4 mb-16">
                        <span class="text-[11px] font-medium tracking-[0.35em] uppercase text-[#D4AF37] font-sans">06 / EXPERIENCE CHRONOLOGY</span>
                        <div class="w-20 h-[1px] bg-[#8C6D4F]/40"></div>
                    </div>

                    <div class="relative border-l border-[#8C6D4F]/25 ml-4 space-y-12">
                        <?php foreach ($experiences as $exp): ?>
                            <div class="relative pl-8">
                                <div class="absolute -left-1.5 top-1.5 w-3 h-3 rounded-full bg-[#D4AF37] border border-black shadow-[0_0_10px_rgba(212,175,55,0.8)]"></div>
                                <span class="text-[9px] font-mono text-[#D4AF37] tracking-widest uppercase block mb-1"><?php echo $exp['period']; ?></span>
                                <h4 class="text-xl font-bold font-display uppercase text-[#FFF5EB]"><?php echo $exp['role']; ?></h4>
                                <h5 class="text-xs font-mono text-[#8C6D4F] uppercase tracking-wider mb-4"><?php echo $exp['company']; ?></h5>
                                <ul class="space-y-2 text-xs font-light text-[#B3A497] leading-relaxed font-sans list-disc list-outside ml-4">
                                    <?php foreach ($exp['bullets'] as $bullet): ?>
                                        <li><?php echo $bullet; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Right Column: RotorDyn Telemetry Wave Simulator -->
                <div class="lg:col-span-6 bg-[#0E0C0A] border border-[#8C6D4F]/25 rounded-sm p-6 sm:p-8 relative">
                    <div class="absolute inset-0 tech-grid-pattern opacity-10 pointer-events-none"></div>
                    <div class="flex justify-between items-center mb-6">
                        <span class="text-[9px] font-mono text-[#D4AF37] tracking-widest uppercase">// ROTORDYN REALTIME FFT TELEMETRY SIMULATOR</span>
                        <span class="text-[8px] font-mono px-2 py-0.5 bg-[#8C6D4F]/10 text-[#D4AF37] border border-[#D4AF37]/20 rounded-full animate-pulse">ACTIVE_LINK</span>
                    </div>

                    <!-- Canvas -->
                    <div class="w-full h-48 bg-black/80 border border-[#8C6D4F]/20 relative overflow-hidden rounded-sm mb-6">
                        <canvas id="telemetry-canvas" class="w-full h-full"></canvas>
                    </div>

                    <!-- Controls -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 items-center font-mono text-[9px] text-[#A8988B]">
                        <div>
                            <label class="block text-[#8C6D4F] uppercase tracking-wider mb-1">Telemetry Signal Frequency</label>
                            <input type="range" id="frequency-slider" min="1" max="100" value="25" class="w-full accent-[#D4AF37] bg-[#120F0C] border border-[#8C6D4F]/20 h-1 rounded-lg outline-none cursor-pointer">
                        </div>
                        <div class="flex justify-end items-center space-x-3">
                            <span id="hz-readout" class="text-xs text-[#D4AF37] font-semibold">25.00 Hz</span>
                            <button id="play-pause-btn" class="px-4 py-2 border border-[#8C6D4F]/40 hover:border-[#D4AF37] text-white uppercase rounded-sm bg-[#120F0C] transition-colors cursor-pointer">PAUSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Research Section -->
    <section id="research" class="relative w-full bg-black py-24 px-6 sm:px-12 lg:px-20 border-b border-[#8C6D4F]/15">
        <div class="max-w-7xl mx-auto w-full">
            <div class="flex items-center space-x-4 mb-16">
                <span class="text-[11px] font-medium tracking-[0.35em] uppercase text-[#D4AF37] font-sans">07 / SCHOLARLY reprints</span>
                <div class="w-20 h-[1px] bg-[#8C6D4F]/40"></div>
            </div>

            <div class="w-full max-w-4xl mx-auto bg-[#0E0C0A] border border-[#8C6D4F]/25 rounded-sm p-6 sm:p-10 relative">
                <div class="absolute inset-0 tech-grid-pattern opacity-10 pointer-events-none"></div>
                <div class="absolute top-0 right-0 p-4 font-mono text-[7px] text-[#8C6D4F]/80 tracking-widest">// IEEE_DOSSIER_INDEX_A7</div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-2 flex justify-start md:justify-center">
                        <div class="w-16 h-16 rounded-full border border-[#D4AF37]/30 flex items-center justify-center bg-black/60 shadow-[0_0_20px_rgba(212,175,55,0.1)]">
                            <span class="text-xs font-mono font-bold text-[#D4AF37]">IEEE</span>
                        </div>
                    </div>
                    <div class="md:col-span-8 text-left">
                        <span class="text-[9px] font-mono text-[#D4AF37] tracking-widest uppercase block mb-1">Suicide Ideation Detection In Social Media Text</span>
                        <h4 class="text-xl sm:text-2xl font-bold font-display uppercase text-[#FFF5EB] mb-2 leading-snug">EXPLAINABLE AI QA RESEARCH PUBLICATION</h4>
                        <p class="text-xs font-light text-[#A8988B] leading-relaxed mb-4 font-sans">Explores text classification models (including BERTimbau, DistilBERT, XLM-R, CNN-BiLSTM, and Random Forest) to identify suicidal ideation, applying explainability frameworks to trace gradient activation layers and interpret feature attribution matrices.</p>
                        <div class="flex flex-wrap gap-1.5 text-[8.5px] font-mono text-[#8C6D4F] uppercase tracking-wider">
                            <span>NLP</span> &bull; <span>Transformers</span> &bull; <span>BERT</span> &bull; <span>Embeddings</span> &bull; <span>Explainable AI</span>
                        </div>
                    </div>
                    <div class="md:col-span-2 flex justify-end items-center mt-4 md:mt-0">
                        <a href="https://ieeexplore.ieee.org/document/11377560/" target="_blank" class="px-5 py-2.5 border border-[#8C6D4F]/50 hover:border-[#D4AF37] text-[10px] font-medium tracking-[0.2em] text-[#EAD8C7] hover:text-white uppercase transition-colors bg-[#120F0C] rounded-sm">
                            READ PAPER
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Contact Section -->
    <section id="contact" class="relative w-full bg-black py-24 px-6 sm:px-12 lg:px-20 border-b border-[#8C6D4F]/15">
        <div class="max-w-7xl mx-auto w-full">
            <div class="flex items-center space-x-4 mb-16">
                <span class="text-[11px] font-medium tracking-[0.35em] uppercase text-[#D4AF37] font-sans">08 / TELEMETRY DISPATCH</span>
                <div class="w-20 h-[1px] bg-[#8C6D4F]/40"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                <!-- Left side -->
                <div class="lg:col-span-5 flex flex-col justify-between h-full">
                    <div>
                        <h3 class="text-4xl sm:text-5xl font-bold font-display uppercase leading-none text-[#FFF5EB] mb-6">START A<br>COLLABORATION</h3>
                        <p class="text-xs font-light text-[#B3A497] leading-[1.8] font-sans max-w-sm mb-10">Whether you want to audit a codebase system, deploy an ONNX-runtime biometrics flow, configure an in-context LLM, or build responsive data visualizations — let's connect.</p>
                    </div>

                    <div class="space-y-4 font-sans text-xs">
                        <div class="flex items-center space-x-3">
                            <span class="text-[#D4AF37] font-mono uppercase tracking-wider w-20">EMAIL:</span>
                            <a href="mailto:shaikbashah20@gmail.com" class="text-[#EAD8C7] hover:text-white hover:underline transition-all">shaikbashah20@gmail.com</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-[#D4AF37] font-mono uppercase tracking-wider w-20">LINKEDIN:</span>
                            <a href="https://www.linkedin.com/in/shaik-rameezbasha-151740286/" target="_blank" class="text-[#EAD8C7] hover:text-white hover:underline transition-all">Shaik Rameez Basha</a>
                        </div>
                        <div class="flex items-center space-x-3">
                            <span class="text-[#D4AF37] font-mono uppercase tracking-wider w-20">LOCATION:</span>
                            <span class="text-[#A8988B]">Piduguralla, Andhra Pradesh</span>
                        </div>
                    </div>
                </div>

                <!-- Right side: Terminal Form -->
                <div class="lg:col-span-7 bg-[#0E0C0A] border border-[#8C6D4F]/25 rounded-sm p-6 sm:p-8 relative">
                    <div class="absolute inset-0 tech-grid-pattern opacity-10 pointer-events-none"></div>
                    <div class="absolute top-0 left-0 w-3 h-3 border-t border-l border-[#8C6D4F]/50"></div>
                    <div class="absolute bottom-0 right-0 w-3 h-3 border-b border-r border-[#8C6D4F]/50"></div>

                    <form id="contact-form" onsubmit="handleFormSubmit(event)" class="space-y-6 font-mono text-xs">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-[#8C6D4F] uppercase tracking-wider mb-2">// SENDER_NAME</label>
                                <input type="text" required class="w-full bg-[#120F0C] border border-[#8C6D4F]/30 hover:border-[#D4AF37]/50 focus:border-[#D4AF37] text-white p-3 rounded-sm outline-none transition-colors">
                            </div>
                            <div>
                                <label class="block text-[#8C6D4F] uppercase tracking-wider mb-2">// SENDER_EMAIL</label>
                                <input type="email" required class="w-full bg-[#120F0C] border border-[#8C6D4F]/30 hover:border-[#D4AF37]/50 focus:border-[#D4AF37] text-white p-3 rounded-sm outline-none transition-colors">
                            </div>
                        </div>

                        <div>
                            <label class="block text-[#8C6D4F] uppercase tracking-wider mb-2">// MESSAGE_PAYLOAD</label>
                            <textarea rows="4" required class="w-full bg-[#120F0C] border border-[#8C6D4F]/30 hover:border-[#D4AF37]/50 focus:border-[#D4AF37] text-white p-3 rounded-sm outline-none transition-colors resize-none"></textarea>
                        </div>

                        <div class="flex justify-between items-center pt-2">
                            <span class="text-[9px] text-[#8C6D4F] animate-pulse">// READY_TO_DISPATCH</span>
                            <button type="submit" class="px-6 py-3 border border-[#8C6D4F]/60 hover:border-[#D4AF37] text-[#FFF5EB] uppercase rounded-sm bg-[#120F0C] transition-all duration-300 cursor-pointer">
                                SEND DISPATCH
                            </button>
                        </div>
                    </form>
                    <div id="form-success" class="hidden font-mono text-xs text-[#D4AF37] p-4 border border-[#D4AF37]/30 bg-[#120F0C] rounded-sm text-center">
                        // DISPATCH SUCCESSFUL: MESSAGE HAS BEEN TRANSMITTED
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Footer -->
    <footer class="w-full bg-black py-12 px-6 sm:px-12 lg:px-20 border-t border-[#8C6D4F]/15 flex flex-col sm:flex-row items-center justify-between text-[10px] font-mono text-[#8C6D4F] tracking-widest uppercase">
        <span>&copy; <?php echo date('Y'); ?> SHAIK RAMEEZ BASHA. ALL RIGHTS RESERVED.</span>
        <span class="mt-4 sm:mt-0 font-sans tracking-normal font-light">BUILDING INTELLIGENT SYSTEMS END-TO-END</span>
    </footer>

    <!-- ================= MODALS ================= -->

    <!-- QuickView Recruiter Dossier Modal -->
    <div id="quickview-modal" class="fixed inset-0 z-50 overflow-y-auto bg-black/95 backdrop-blur-xl flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-300">
        <div class="bg-[#0E0C0A] rounded-xl w-full max-w-4xl max-h-[90vh] overflow-y-auto shadow-2xl relative border border-[#8C6D4F]/35 flex flex-col print:bg-white print:text-black print:max-h-none print:shadow-none print:border-none print:p-0 font-sans">
            
            <!-- Top Gold Horizon Edge -->
            <div class="absolute top-0 left-0 right-0 h-[1px] bg-gradient-to-r from-transparent via-[#D4AF37]/80 to-transparent print:hidden"></div>

            <!-- Corner Pins -->
            <div class="absolute top-0 left-0 w-3 h-3 border-t border-l border-[#D4AF37]/50 print:hidden"></div>
            <div class="absolute bottom-0 right-0 w-3 h-3 border-b border-r border-[#D4AF37]/50 print:hidden"></div>

            <!-- Header Actions bar (Hidden in print) -->
            <div class="sticky top-0 bg-black/90 backdrop-blur-md px-6 py-4 border-b border-[#8C6D4F]/20 flex items-center justify-between z-10 print:hidden">
                <span class="text-[9px] font-mono tracking-widest text-[#8C6D4F] uppercase">
                    RECRUITER INTERACTION DOSSIER
                </span>
                <div class="flex items-center gap-4">
                    <button onclick="window.print()" class="text-[9px] font-mono tracking-widest px-3 py-1.5 bg-[#14100D] border border-[#8C6D4F]/40 hover:border-[#D4AF37] hover:bg-[#1C1612] text-[#EAD8C7] hover:text-[#FFF5EB] rounded-sm transition-colors cursor-pointer">
                        PRINT / SAVE PDF
                    </button>
                    <button onclick="toggleQuickView(false)" class="p-1 text-[#A8988B] hover:text-[#E8DFD8] transition-colors cursor-pointer">
                        CLOSE
                    </button>
                </div>
            </div>

            <!-- Printable Resume Document -->
            <div class="p-8 md:p-12 overflow-y-auto flex-1 text-[#A8988B] print:text-black print:p-0 text-left">
                
                <!-- Main Info -->
                <div class="border-b border-[#8C6D4F]/25 print:border-neutral-950 pb-6 flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                    <div>
                        <h1 class="text-3xl md:text-4xl text-white print:text-black tracking-tight font-bold uppercase font-display">
                            SHAIK RAMEEZ BASHA
                        </h1>
                        <p class="text-sm font-mono text-[#D4AF37] print:text-neutral-800 uppercase tracking-widest mt-1">
                            AI/ML &amp; GenAI Engineer &bull; Full-Stack Engineer
                        </p>
                    </div>
                    <div class="text-[10px] font-mono text-[#A8988B] print:text-neutral-700 flex flex-col gap-1.5 md:items-end">
                        <span>shaikbashah20@gmail.com</span>
                        <span>linkedin.com/in/shaik-rameezbasha-151740286/</span>
                        <span>github.com/Basharameez</span>
                        <span>Piduguralla, Andhra Pradesh, India</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                    <!-- Left side: Skills & Education -->
                    <div class="md:col-span-1 flex flex-col gap-6">
                        
                        <!-- Education -->
                        <div>
                            <h2 class="text-[10px] font-mono font-bold tracking-widest text-[#EAD8C7] print:text-black border-b border-[#8C6D4F]/25 print:border-neutral-300 pb-2 uppercase">
                                Education
                            </h2>
                            <div class="mt-3">
                                <p class="text-sm font-bold text-white print:text-black">B.Tech Computer Science (AI)</p>
                                <p class="text-xs text-[#A8988B] print:text-neutral-700">Narasaraopeta Engineering College</p>
                                <p class="text-xs text-[#8C6D4F] print:text-neutral-500 font-mono">2022 &ndash; 2026</p>
                                <p class="text-xs font-mono font-bold text-[#D4AF37] print:text-black mt-1">CGPA: 7.79 / 10.0</p>
                            </div>
                        </div>

                        <!-- Research -->
                        <div>
                            <h2 class="text-[10px] font-mono font-bold tracking-widest text-[#EAD8C7] print:text-black border-b border-[#8C6D4F]/25 print:border-neutral-300 pb-2 uppercase">
                                Research
                            </h2>
                            <div class="mt-3">
                                <p class="text-xs font-bold text-white print:text-black">Explainable Artificial Intelligence</p>
                                <p class="text-xs text-[#A8988B] print:text-neutral-700 font-sans font-light">Text classification models and gradient hook interpretability.</p>
                                <p class="text-xs text-[#8C6D4F] font-medium font-mono mt-1">Published in IEEE Xplore, 2026</p>
                            </div>
                        </div>

                        <!-- Skills Matrix -->
                        <div>
                            <h2 class="text-[10px] font-mono font-bold tracking-widest text-[#EAD8C7] print:text-black border-b border-[#8C6D4F]/25 print:border-neutral-300 pb-2 uppercase">
                                Skills Matrix
                            </h2>
                            <div class="mt-3 flex flex-col gap-3">
                                <?php foreach ($skills as $category): ?>
                                    <div>
                                        <p class="text-[9px] font-mono font-bold text-white print:text-neutral-800 uppercase tracking-wider"><?php echo $category['name']; ?></p>
                                        <div class="flex flex-wrap gap-1 mt-1.5">
                                            <?php foreach ($category['skills'] as $skill): ?>
                                                <span class="text-[9px] font-mono bg-black print:bg-neutral-50 text-[#A8988B] print:text-neutral-800 px-2 py-0.5 rounded-sm border border-[#8C6D4F]/25 print:border-neutral-200"><?php echo $skill; ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>

                    <!-- Right side: Experience & Projects -->
                    <div class="md:col-span-2 flex flex-col gap-6">
                        
                        <!-- Experience -->
                        <div>
                            <h2 class="text-[10px] font-mono font-bold tracking-widest text-[#EAD8C7] print:text-black border-b border-[#8C6D4F]/25 print:border-neutral-300 pb-2 uppercase">
                                Professional Experience
                            </h2>
                            
                            <div class="mt-3 flex flex-col gap-4">
                                <?php foreach ($experiences as $exp): ?>
                                    <div>
                                        <div class="flex justify-between items-start text-sm">
                                            <p class="font-bold text-white print:text-black"><?php echo $exp['role']; ?></p>
                                            <span class="text-xs text-[#8C6D4F] font-mono"><?php echo $exp['period']; ?></span>
                                        </div>
                                        <p class="text-xs text-[#D4AF37] print:text-black font-bold font-mono"><?php echo $exp['company']; ?></p>
                                        <ul class="list-disc list-outside ml-4 mt-1.5 text-xs text-[#A8988B] print:text-neutral-700 flex flex-col gap-1 font-sans font-light">
                                            <?php foreach ($exp['bullets'] as $bullet): ?>
                                                <li><?php echo $bullet; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <!-- Top Projects -->
                        <div>
                            <h2 class="text-[10px] font-mono font-bold tracking-widest text-[#EAD8C7] print:text-black border-b border-[#8C6D4F]/25 print:border-neutral-300 pb-2 uppercase">
                                Selected Intelligent Systems
                            </h2>
                            
                            <div class="mt-3 flex flex-col gap-4">
                                <?php foreach ($projects as $project): ?>
                                    <div>
                                        <p class="text-sm font-bold text-white print:text-black font-mono">
                                            <?php echo $project['title']; ?>
                                        </p>
                                        <p class="text-xs text-[#A8988B] print:text-neutral-700 mt-1 font-sans font-light">
                                            <?php echo $project['details']['overview']; ?>
                                        </p>
                                        <p class="text-[10px] text-[#D4AF37] print:text-black font-mono font-bold mt-1">
                                            <?php echo implode(', ', $project['tags']); ?>
                                        </p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Project Focus Dossier Modal -->
    <div id="focus-modal" class="fixed inset-0 z-50 overflow-y-auto bg-black/90 flex items-center justify-center p-4 sm:p-6 opacity-0 pointer-events-none transition-all duration-300">
        <div class="relative w-full max-w-5xl bg-[#0E0C0A] border border-[#8C6D4F]/25 rounded-sm p-6 sm:p-10 shadow-[0_0_80px_rgba(0,0,0,0.95)] max-h-[90vh] overflow-y-auto">
            <div class="absolute inset-0 tech-grid-pattern opacity-5 pointer-events-none"></div>

            <div class="flex justify-between items-center border-b border-[#8C6D4F]/25 pb-4 mb-8">
                <span id="focus-modal-eyebrow" class="text-[9px] font-mono text-[#D4AF37] tracking-widest">// PROJECT_DOSSIER // MODULE</span>
                <button onclick="closeProjectFocus()" class="text-[9px] font-mono px-3 py-1 border border-[#8C6D4F]/30 hover:border-[#D4AF37] text-[#A8988B] hover:text-white uppercase transition-colors cursor-pointer">CLOSE</button>
            </div>

            <h3 id="focus-modal-title" class="text-3xl sm:text-4xl font-bold font-display uppercase text-[#FFF5EB] mb-6 leading-none">PROJECT TITLE</h3>

            <!-- Tabs -->
            <div class="flex border-b border-[#8C6D4F]/15 mb-6 text-[10px] font-mono text-[#8C6D4F] tracking-widest uppercase overflow-x-auto">
                <button onclick="setFocusTab('overview')" id="tab-overview" class="px-4 py-2 border-b border-[#D4AF37] text-[#D4AF37]">OVERVIEW</button>
                <button onclick="setFocusTab('architecture')" id="tab-architecture" class="px-4 py-2 hover:text-[#FFF5EB]">ARCHITECTURE</button>
                <button onclick="setFocusTab('engineering')" id="tab-engineering" class="px-4 py-2 hover:text-[#FFF5EB]">ENGINEERING</button>
                <button onclick="setFocusTab('challenges')" id="tab-challenges" class="px-4 py-2 hover:text-[#FFF5EB]">CHALLENGES</button>
                <button onclick="setFocusTab('outcome')" id="tab-outcome" class="px-4 py-2 hover:text-[#FFF5EB]">OUTCOME</button>
            </div>

            <!-- Tab Content -->
            <div id="focus-modal-content" class="text-xs sm:text-sm font-light text-[#B3A497] leading-[1.85] font-sans min-h-[150px]">
                Tab content load failed.
            </div>
        </div>
    </div>

    <!-- ================= SCRIPTS ================= -->
    <script>
        // Database object accessible to JS
        const projectsData = <?php echo json_encode($projects); ?>;
        let activeProject = null;
        let activeTab = 'overview';

        // 1. Custom Spring Cursor
        const cursor = document.getElementById('custom-cursor');
        let cursorX = -100;
        let cursorY = -100;
        let currentX = -100;
        let currentY = -100;
        
        window.addEventListener('mousemove', (e) => {
            cursorX = e.clientX;
            cursorY = e.clientY;
            
            // Check hover interactivity
            const target = e.target;
            const isInteractive = target.closest('a') || target.closest('button') || target.closest('input') || target.closest('textarea') || target.closest('.cursor-pointer');
            
            if (isInteractive) {
                cursor.style.width = '40px';
                cursor.style.height = '40px';
                cursor.style.backgroundColor = 'rgba(212, 175, 55, 0.1)';
            } else {
                cursor.style.width = '10px';
                cursor.style.height = '10px';
                cursor.style.backgroundColor = 'rgba(232, 223, 216, 0.95)';
            }
        });

        // Spring loop
        function updateCursor() {
            const dx = cursorX - currentX;
            const dy = cursorY - currentY;
            currentX += dx * 0.15;
            currentY += dy * 0.15;
            
            const sizeOffset = cursor.style.width === '40px' ? 20 : 5;
            cursor.style.transform = `translate(${currentX - sizeOffset}px, ${currentY - sizeOffset}px)`;
            
            requestAnimationFrame(updateCursor);
        }
        updateCursor();

        // 2. 3D About Card Tilt Spotlight
        const aboutCard = document.getElementById('about-card');
        const aboutSpotlight = document.getElementById('about-spotlight');

        if (aboutCard) {
            aboutCard.addEventListener('mousemove', (e) => {
                const rect = aboutCard.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width - 0.5;
                const y = (e.clientY - rect.top) / rect.height - 0.5;
                
                // Spring tilt approximation in CSS transition duration-300
                aboutCard.style.transform = `perspective(1000px) rotateX(${y * -12}deg) rotateY(${x * 12}deg)`;
                
                aboutSpotlight.style.opacity = '1';
                aboutSpotlight.style.background = `radial-gradient(circle 240px at ${e.clientX - rect.left}px ${e.clientY - rect.top}px, rgba(255,255,255,0.35), rgba(212,175,55,0.18), transparent 80%)`;
            });
            aboutCard.addEventListener('mouseleave', () => {
                aboutCard.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
                aboutSpotlight.style.opacity = '0';
            });
        }

        // 3. ScrollStack Cards pinning transitions
        window.addEventListener('scroll', () => {
            const cards = document.querySelectorAll('.scroll-stack-card');
            const runway = document.querySelector('.scroll-stack-runway');
            if (!runway) return;
            
            const scrollY = window.scrollY;
            
            cards.forEach((card, index) => {
                const rect = card.getBoundingClientRect();
                const cardTop = rect.top;
                const viewportTopOffset = window.innerHeight * 0.15;
                
                if (cardTop <= viewportTopOffset + 5) {
                    // Card is pinned: apply scaling and fade out as scroll deepens
                    const rawProgress = (viewportTopOffset - cardTop) / 300; // normalized progress
                    const progress = Math.min(Math.max(rawProgress, 0), 1);
                    
                    const scale = 1 - (progress * 0.05);
                    const opacity = 1 - (progress * 0.1);
                    const rotate = progress * -1.5;
                    
                    card.style.transform = `scale(${scale}) rotate(${rotate}deg)`;
                    card.style.filter = `brightness(${1 - (progress * 0.25)})`;
                } else {
                    card.style.transform = 'scale(1) rotate(0deg)';
                    card.style.filter = 'brightness(1)';
                }
            });
        });

        // 4. Intelligence Nodes panel selector
        const genAINodeData = [
            {
                title: "01 / INPUT TRIAGE (IMAGE & RESOLUTION GATE)",
                description: "Evaluates patient images client-side before processing, checking resolution, lighting metrics, and image orientation limits to reject corrupt payloads early."
            },
            {
                title: "02 / EMBEDDINGS VECTOR SEARCH",
                description: "Converts text queries and image representations into semantic dense vector tokens, matching them against local caches or vector databases for contextual indexing."
            },
            {
                title: "03 / IN-CONTEXT PROMPTING WORKFLOW",
                description: "Assembles retrieved database coordinates and context markers into prompt layers, serving them to standard LLM endpoints with deterministic schema guidelines."
            },
            {
                title: "04 / OUTPUT VALIDAION SCHEMA SHIELD",
                description: "Intercepts incoming LLM model completions, validating properties against JSON schema barriers to detect formatting errors or logical hallucinations."
            }
        ];

        function setGenAINode(index) {
            // Update node highlights
            for (let i = 0; i < 4; i++) {
                const node = document.getElementById(`node-${i}`);
                if (i === index) {
                    node.className = "w-full p-4 text-left border border-[#D4AF37] bg-[#120F0C] transition-colors rounded-sm flex justify-between items-center group";
                    node.querySelector('span:last-child').innerText = "Active";
                    node.querySelector('span:last-child').className = "text-xs text-[#D4AF37]";
                } else {
                    node.className = "w-full p-4 text-left border border-[#8C6D4F]/20 bg-[#0E0C0A] hover:border-[#D4AF37]/50 transition-colors rounded-sm flex justify-between items-center group";
                    node.querySelector('span:last-child').innerText = "Standby";
                    node.querySelector('span:last-child').className = "text-xs text-[#8C6D4F]";
                }
            }

            // Update specs panel content
            const contentDiv = document.getElementById('genai-spec-content');
            contentDiv.innerHTML = `
                <h4 class="text-xl font-bold font-display uppercase text-[#D4AF37] mb-4">${genAINodeData[index].title}</h4>
                <p class="text-xs font-light text-[#B3A497] leading-[1.85] font-sans">${genAINodeData[index].description}</p>
            `;
        }

        // 5. RotorDyn FFT Wave Simulator Canvas
        const canvas = document.getElementById('telemetry-canvas');
        const ctx = canvas.getContext('2d');
        const slider = document.getElementById('frequency-slider');
        const hzReadout = document.getElementById('hz-readout');
        const playBtn = document.getElementById('play-pause-btn');

        let isRunning = true;
        let baseFrequency = 25.00;
        let animationFrameId = null;
        let xOffset = 0;

        function resizeCanvas() {
            canvas.width = canvas.parentElement.clientWidth;
            canvas.height = canvas.parentElement.clientHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        slider.addEventListener('input', (e) => {
            baseFrequency = parseFloat(e.target.value);
            hzReadout.innerText = `${baseFrequency.toFixed(2)} Hz`;
        });

        playBtn.addEventListener('click', () => {
            isRunning = !isRunning;
            playBtn.innerText = isRunning ? "PAUSE" : "PLAY";
            if (isRunning) drawWave();
        });

        function drawWave() {
            if (!isRunning) return;

            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Draw grids
            ctx.strokeStyle = 'rgba(140, 109, 79, 0.08)';
            ctx.lineWidth = 0.5;
            for (let i = 0; i < canvas.width; i += 40) {
                ctx.beginPath();
                ctx.moveTo(i, 0);
                ctx.lineTo(i, canvas.height);
                ctx.stroke();
            }
            for (let j = 0; j < canvas.height; j += 45) {
                ctx.beginPath();
                ctx.moveTo(0, j);
                ctx.lineTo(canvas.width, j);
                ctx.stroke();
            }

            // Draw center baseline axis
            ctx.strokeStyle = 'rgba(140, 109, 79, 0.2)';
            ctx.beginPath();
            ctx.moveTo(0, canvas.height / 2);
            ctx.lineTo(canvas.width, canvas.height / 2);
            ctx.stroke();

            // Draw composite wave (Sine wave FFT simulation: Y = sin(w1) + sin(w2) + sin(w3))
            ctx.strokeStyle = '#D4AF37';
            ctx.lineWidth = 1.5;
            ctx.shadowBlur = 8;
            ctx.shadowColor = 'rgba(212, 175, 55, 0.4)';
            ctx.beginPath();

            const amplitude = canvas.height * 0.15;
            const midY = canvas.height / 2;

            for (let x = 0; x < canvas.width; x++) {
                const rad = (x / canvas.width) * Math.PI * 2 * (baseFrequency / 8);
                const y1 = Math.sin(rad + xOffset);
                const y2 = Math.sin(rad * 3.2 + xOffset * 1.5) * 0.35; // harmonics
                const y3 = Math.sin(rad * 8.0 + xOffset * 2.8) * 0.12;
                
                const totalY = midY + (y1 + y2 + y3) * amplitude;

                if (x === 0) ctx.moveTo(x, totalY);
                else ctx.lineTo(x, totalY);
            }
            ctx.stroke();
            ctx.shadowBlur = 0; // reset shadow

            // Telemetry coordinates readout at bottom-right
            ctx.font = '8px monospace';
            ctx.fillStyle = 'rgba(168, 152, 139, 0.5)';
            ctx.fillText(`SIGNAL_NODE: ${baseFrequency.toFixed(2)}_HZ // OFFSET: ${xOffset.toFixed(3)}`, 10, canvas.height - 10);

            // Increment time offsets
            xOffset += (baseFrequency / 100);

            animationFrameId = requestAnimationFrame(drawWave);
        }
        drawWave();

        // 6. Modals Actions
        const quickview = document.getElementById('quickview-modal');
        const focusModal = document.getElementById('focus-modal');

        function toggleQuickView(show) {
            if (show) {
                quickview.classList.remove('opacity-0', 'pointer-events-none');
            } else {
                quickview.classList.add('opacity-0', 'pointer-events-none');
            }
        }

        function openProjectFocus(projectId) {
            activeProject = projectsData.find(p => p.id === projectId);
            if (!activeProject) return;

            document.getElementById('focus-modal-eyebrow').innerText = `// PROJECT_DOSSIER // MODULE_${activeProject.number}`;
            document.getElementById('focus-modal-title').innerText = activeProject.title;
            
            // Default to overview tab
            setFocusTab('overview');

            // Open modal container
            focusModal.classList.remove('opacity-0', 'pointer-events-none');
        }

        function setFocusTab(tabName) {
            if (!activeProject) return;
            activeTab = tabName;

            const tabs = ['overview', 'architecture', 'engineering', 'challenges', 'outcome'];
            tabs.forEach(t => {
                const btn = document.getElementById(`tab-${t}`);
                if (t === tabName) {
                    btn.className = "px-4 py-2 border-b border-[#D4AF37] text-[#D4AF37]";
                } else {
                    btn.className = "px-4 py-2 hover:text-[#FFF5EB] transition-colors";
                }
            });

            // Set tab content text
            const contentDiv = document.getElementById('focus-modal-content');
            contentDiv.innerHTML = `<p class="leading-[1.85]">${activeProject.details[tabName]}</p>`;
        }

        function closeProjectFocus() {
            focusModal.classList.add('opacity-0', 'pointer-events-none');
            activeProject = null;
        }

        // 7. Contact form dispatch logic
        function handleFormSubmit(e) {
            e.preventDefault();
            document.getElementById('contact-form').classList.add('hidden');
            document.getElementById('form-success').classList.remove('hidden');
        }

        // 8. Systems Architecture Layer switching
        const architectureLayers = <?php echo json_encode($architectureLayers); ?>;

        function setArchitectureLayer(layerId) {
            const layer = architectureLayers.find(l => l.id === layerId);
            if (!layer) return;

            document.querySelectorAll('.arch-layer-btn').forEach(btn => {
                if (btn.id === `arch-btn-${layerId}`) {
                    btn.className = 'arch-layer-btn p-4 text-left transition-all duration-300 rounded-sm border flex items-center justify-between cursor-pointer relative group border-[#D4AF37] bg-[#120F0C] shadow-[0_0_15px_rgba(212,175,55,0.12)]';
                    const arrow = btn.querySelector('.arch-arrow');
                    if (arrow) arrow.classList.add('hidden');
                } else {
                    btn.className = 'arch-layer-btn p-4 text-left transition-all duration-300 rounded-sm border flex items-center justify-between cursor-pointer relative group bg-[#0E0C0A] border-[#8C6D4F]/25 hover:border-[#8C6D4F]';
                    const arrow = btn.querySelector('.arch-arrow');
                    if (arrow) arrow.classList.remove('hidden');
                }
            });

            document.getElementById('arch-spec-title').textContent = layer.title;
            document.getElementById('arch-spec-desc').textContent = layer.description;
            document.getElementById('arch-spec-module').textContent = `MODULE ID: Layer-${layerId.toUpperCase()}`;

            const skillsContainer = document.getElementById('arch-spec-skills');
            skillsContainer.innerHTML = '';
            layer.skills.forEach(skill => {
                const span = document.createElement('span');
                span.className = 'text-[10px] font-mono bg-black border border-[#8C6D4F]/25 text-[#EAD8C7] px-2.5 py-1 rounded-sm uppercase tracking-wider';
                span.textContent = skill;
                skillsContainer.appendChild(span);
            });
        }

        // 9. Tech Matrix Hover Relationship Linkages
        function hoverSkill(skillName) {
            document.querySelectorAll('.skill-badge').forEach(badge => {
                if (badge.getAttribute('data-skill') === skillName) {
                    badge.className = 'skill-badge text-[10px] font-mono px-3 py-1.5 rounded-sm border transition-all duration-200 cursor-crosshair bg-[#D4AF37]/10 border-[#D4AF37] text-[#D4AF37] shadow-[0_0_12px_rgba(212,175,55,0.15)] font-bold';
                } else {
                    badge.className = 'skill-badge text-[10px] font-mono px-3 py-1.5 rounded-sm border transition-all duration-200 cursor-crosshair bg-black/40 border-[#8C6D4F]/35 text-[#A8988B] hover:border-[#8C6D4F] hover:text-white';
                }
            });

            document.querySelectorAll('.linkage-project-card').forEach(card => {
                const techs = card.getAttribute('data-techs').toLowerCase().split(',');
                const normalizedSkill = skillName.toLowerCase();

                let isRelated = techs.some(tech => 
                    tech === normalizedSkill || 
                    tech.includes(normalizedSkill) || 
                    normalizedSkill.includes(tech)
                );

                if (normalizedSkill === 'nlp' && techs.includes('explainable ai')) {
                    isRelated = true;
                }

                const badge = card.querySelector('.linkage-badge');
                if (isRelated) {
                    card.className = 'linkage-project-card p-3 rounded-sm border transition-all duration-300 border-[#D4AF37] bg-[#D4AF37]/5 text-white';
                    if (badge) badge.classList.remove('hidden');
                } else {
                    card.className = 'linkage-project-card p-3 rounded-sm border transition-all duration-300 border-[#8C6D4F]/10 bg-transparent opacity-20';
                    if (badge) badge.classList.add('hidden');
                }
            });

            document.getElementById('tracing-status').textContent = `TRACING: "${skillName.toUpperCase()}"...`;
            const spinner = document.getElementById('tracing-spinner');
            if (spinner) spinner.classList.add('animate-spin');
        }

        function unhoverSkill() {
            document.querySelectorAll('.skill-badge').forEach(badge => {
                badge.className = 'skill-badge text-[10px] font-mono px-3 py-1.5 rounded-sm border transition-all duration-200 cursor-crosshair bg-black/40 border-[#8C6D4F]/35 text-[#A8988B] hover:border-[#8C6D4F] hover:text-white';
            });

            document.querySelectorAll('.linkage-project-card').forEach(card => {
                card.className = 'linkage-project-card p-3 rounded-sm border border-[#8C6D4F]/25 bg-[#050403] transition-all duration-300';
                const badge = card.querySelector('.linkage-badge');
                if (badge) badge.classList.add('hidden');
            });

            document.getElementById('tracing-status').textContent = 'STATUS: WAITING FOR HOVER';
            const spinner = document.getElementById('tracing-spinner');
            if (spinner) spinner.classList.remove('animate-spin');
        }
    </script>
</body>
</html>
