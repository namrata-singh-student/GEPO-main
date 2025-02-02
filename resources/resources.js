/*document.addEventListener("DOMContentLoaded", () => { */

    const resources = [
        {
            title: "Student Resources",
            description:
                "Guidance on visas, financial aid, cultural integration, and health services tailored to student needs.",
        },
        {
            title: "Faculty Resources",
            description:
                "Assistance with grant applications, proposal writing, and institutional support for international collaborations.",
        },
        {
            title: "International Guidelines",
            description:
                "Comprehensive travel advisories, immigration policies, and tips for cultural exchange participants.",
        },
        {
            title: "Downloadable Resources",
            description:
                "Access forms, brochures, and policy documents to help streamline your international collaboration efforts.",
        },
    ];

    const container = document.getElementById("resources-container");

    resources.forEach((resource, index) => {
        const section = document.createElement("section");
        section.className = "resources-section animated fade-in";
        section.style.animationDelay = `${index * 0.2}s`;

        section.innerHTML = `
            <h2>${resource.title}</h2>
            <p>${resource.description}</p>
        `;

        container.appendChild(section);
    });
});
