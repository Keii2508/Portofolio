@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h6 class="accent-red fw-bold mb-3 text-center text-lg-start">MY JOURNEY</h6>
            <h1 class="about-heading mb-5 text-center text-lg-start">Experience & Projects</h1>

            <div class="timeline-container">

                <div class="experience-card mb-5">
                    <div class="timeline-dot"></div>
                    <p class="exp-date accent-red">2023 - PRESENT</p>
                    <h3 class="mb-1">Computer Science Student</h3>
                    <p class="exp-company">Binus University</p>
                    <p class="text-muted mb-4">
                        Focusing on Software Engineering, Human-Computer Interaction, and Digital Product Design. Currently expanding my skill set by actively exploring Data Science and Artificial Intelligence to understand how to build smarter, data-driven applications.
                    </p>
                    <div class="skills-used">
                        <span class="skill-tag">Software Engineering</span>
                        <span class="skill-tag">UI/UX Design</span>
                        <span class="skill-tag">Data Science (Learning)</span>
                        <span class="skill-tag">AI / Machine Learning</span>
                    </div>
                </div>

                <div class="experience-card mb-5">
                    <div class="timeline-dot"></div>
                    <p class="exp-date accent-red">2024</p>
                    <h3 class="mb-1">Freshmen Mentor</h3>
                    <p class="exp-company">Binus University (First Year Program)</p>
                    <p class="text-muted">
                        Served as a mentor for 10+ incoming freshmen, facilitating their transition into university life. Conducted sessions on academic excellence, campus regulations, and character building while fostering a supportive community environment.                    </p>
                    <div class="skills-used">
                        <span class="skill-tag">Leadership</span>
                        <span class="skill-tag">Public Speaking</span>
                        <span class="skill-tag">Mentoring</span>
                        <span class="skill-tag">Team Management</span>
                    </div>
                </div>

                <div class="experience-card mb-5">
                    <div class="timeline-dot"></div>
                    <p class="exp-date accent-red">2025</p>
                    <h3 class="mb-1">Fullstack Developer</h3>
                    <p class="exp-company">Project Habitscore</p>
                    <p class="text-muted mb-4">
                        Developing a full-stack habit tracking application using Laravel 11. Responsible for database architecture, authentication systems, and deploying the application to Railway via GitHub integration.
                    </p>
                    <div class="skills-used">
                        <span class="skill-tag">Laravel 11</span>
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">Bootstrap 5</span>
                        <span class="skill-tag">Railway Deployment</span>
                    </div>
                </div>

                <div class="experience-card mb-5">
                    <div class="timeline-dot"></div>
                    <p class="exp-date accent-red">2025</p>
                    <h3 class="mb-1">UI/UX & Brand Designer</h3>
                    <p class="exp-company">Project Tokyoji Brand Identity</p>
                    <p class="text-muted mb-4">
                        Designed the visual identity and user interface for Tokyoji. Created high-fidelity prototypes, brand guidelines, and ensuring a consistent aesthetic across digital platforms.
                    </p>
                    <div class="skills-used">
                        <span class="skill-tag">Figma</span>
                        <span class="skill-tag">Adobe Illustrator</span>
                        <span class="skill-tag">Prototyping</span>
                        <span class="skill-tag">UI Design</span>
                    </div>
                </div>

                <div class="experience-card mb-5">
                    <div class="timeline-dot"></div>
                    <p class="exp-date accent-red">2025</p>
                    <h3 class="mb-1">Brand & Content Designer</h3>
                    <p class="exp-company">Project Ayana Motor</p>
                    <p class="text-muted mb-4">
                        Developed the visual branding and social media strategy for a motorcycle parts and accessories shop. Created a cohesive Instagram feed prototype, logo variations, and product mockups to establish a strong, engaging digital presence.
                    </p>
                    <div class="skills-used">
                        <span class="skill-tag">Brand Identity</span>
                        <span class="skill-tag">Social Media Design</span>
                        <span class="skill-tag">Figma</span>
                        <span class="skill-tag">Content Strategy</span>
                    </div>
                </div>

                <div class="experience-card mb-5">
                    <div class="timeline-dot"></div>
                    <p class="exp-date accent-red">2026</p>
                    <h3 class="mb-1">Data Science & AI</h3>
                    <p class="exp-company">AI Project</p>
                    <p class="text-muted mb-4">
                        Building an intelligent recommendation system for fashion products using machine learning algorithms. This project processes and analyzes a public e-commerce dataset from Kaggle to identify user preference patterns. The system is programmed entirely in Python to provide highly personalized clothing recommendations, combining solid algorithmic logic with an understanding of user needs (UX).
                    <div class="skills-used">
                        <span class="skill-tag">Python</span>
                        <span class="skill-tag">Machine Learning</span>
                        <span class="skill-tag">Data Analytics</span>
                        <span class="skill-tag">Kaggle Dataset</span>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection