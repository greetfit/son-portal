import { Grid, html } from "gridjs";

document.addEventListener("DOMContentLoaded", () => {
    const el = document.getElementById("table-gridjs");
    if (!el) return;

    const url = el.dataset.url;

    new Grid({
        columns: [
            { name: "ID", width: "80px" },
            "Name",
            { name: "Email" },
            "City",
            "Manager",
            "Status",
            {
                name: "Actions",
                width: "160px",
                formatter: cell => html(cell)
            }
        ],
        pagination: { limit: 5 },
        sort: true,
        search: true,
        server: {
            url: url,
            then: data => data
        },
        className: {
            table: "table table-bordered table-hover align-middle"
        }
    }).render(el);
});
