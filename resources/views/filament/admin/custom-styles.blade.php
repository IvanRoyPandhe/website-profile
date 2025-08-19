@vite('resources/css/admin-custom.css')

<style>
/* Light Theme */
.fi-sidebar {
    background: #ffffff !important;
}

.fi-sidebar-nav {
    background: #ffffff !important;
}

.fi-sidebar-header {
    background: #ffffff !important;
}

/* Dark Theme */
.dark .fi-sidebar {
    background: #1f2937 !important;
    border-right: 1px solid rgba(251, 191, 36, 0.3) !important;
}

.dark .fi-sidebar-nav {
    background: #1f2937 !important;
}

.dark .fi-sidebar-header {
    background: #1f2937 !important;
    border-bottom: 1px solid rgba(251, 191, 36, 0.3) !important;
}

.dark .fi-sidebar-nav-item > .fi-sidebar-nav-item-button {
    background: rgba(55, 65, 81, 0.8) !important;
    color: #e5e7eb !important;
    border-color: rgba(251, 191, 36, 0.2) !important;
}

.dark .fi-sidebar-nav-item > .fi-sidebar-nav-item-button:hover {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1f2937 !important;
}

.dark .fi-sidebar-nav-group-label {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1f2937 !important;
}

.dark .fi-main {
    background: linear-gradient(135deg, #111827 0%, #1f2937 100%) !important;
}

.dark .fi-section {
    background: linear-gradient(135deg, #374151 0%, #4b5563 100%) !important;
    border-image: linear-gradient(135deg, #fbbf24 0%, #1e40af 100%) 1 !important;
}

.dark .fi-section-header {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1f2937 !important;
}

.fi-sidebar-nav-item > .fi-sidebar-nav-item-button[aria-current="page"] {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1e40af !important;
}

.dark .fi-sidebar-nav-item > .fi-sidebar-nav-item-button[aria-current="page"] {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%) !important;
    color: #ffffff !important;
}

.fi-header {
    border-bottom: 1px solid rgba(251, 191, 36, 0.3) !important;
}

.fi-btn-primary {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%) !important;
    border: 1px solid rgba(251, 191, 36, 0.5) !important;
    color: #ffffff !important;
}

.fi-btn-primary:hover {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1e40af !important;
}

.fi-btn {
    color: #ffffff !important;
}

.fi-btn:hover {
    color: #1e40af !important;
}

.fi-header-actions .fi-btn {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1e40af !important;
    border: 1px solid #f59e0b !important;
    font-weight: 600 !important;
}

.fi-header-actions .fi-btn:hover {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
    color: #1e40af !important;
}

.dark .fi-header-actions .fi-btn {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1f2937 !important;
}

.dark .fi-header-actions .fi-btn:hover {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
    color: #1f2937 !important;
}

.fi-ac-btn {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%) !important;
    color: #ffffff !important;
    border: 1px solid rgba(251, 191, 36, 0.5) !important;
}

.fi-ac-btn:hover {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1e40af !important;
}

.dark .fi-btn-primary {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%) !important;
    border-color: #fbbf24 !important;
    color: #ffffff !important;
}

.dark .fi-btn-primary:hover {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1f2937 !important;
}

.dark .fi-header-heading {
    color: #ffffff !important;
}

/* Fix all text colors in dark theme */
.dark * {
    color: #ffffff !important;
}

.dark .fi-body,
.dark .fi-main,
.dark .fi-section,
.dark .fi-section-content,
.dark .fi-section-content-ctn,
.dark .fi-form,
.dark .fi-form-component-ctn,
.dark .fi-fo-field-wrp,
.dark .fi-input,
.dark .fi-select,
.dark .fi-textarea,
.dark .fi-label,
.dark .fi-field-wrp-label,
.dark .fi-fo-field-wrp-label,
.dark .fi-table,
.dark .fi-ta,
.dark .fi-ta-content,
.dark .fi-ta-header,
.dark .fi-ta-header-cell,
.dark .fi-ta-cell,
.dark .fi-ta-text,
.dark .fi-breadcrumbs,
.dark .fi-breadcrumbs-item,
.dark .fi-page-heading,
.dark .fi-page-sub-heading,
.dark .fi-resource-table,
.dark .fi-resource-form,
.dark p,
.dark span,
.dark div,
.dark label,
.dark input,
.dark select,
.dark textarea {
    color: #ffffff !important;
}

/* Specific overrides for elements that should stay colored */
.dark .fi-btn-primary,
.dark .fi-header-actions .fi-btn {
    color: #1f2937 !important;
}

.dark .fi-sidebar-nav-group-label {
    color: #1f2937 !important;
}

.dark .fi-section-header {
    color: #1f2937 !important;
}

.dark .fi-modal {
    background: #374151 !important;
}

.dark .fi-modal-content {
    background: #374151 !important;
}

.dark .fi-notification {
    background: #374151 !important;
    color: #e5e7eb !important;
}

.dark .fi-badge-primary {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%) !important;
    border-color: #fbbf24 !important;
    color: #ffffff !important;
}

.dark .fi-tabs-tab {
    background: #4b5563 !important;
    color: #e5e7eb !important;
    border-color: rgba(251, 191, 36, 0.2) !important;
}

.dark .fi-tabs-tab[aria-selected="true"] {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1f2937 !important;
}

.dark .fi-ac-btn-action {
    background: #4b5563 !important;
    color: #e5e7eb !important;
    border-color: rgba(251, 191, 36, 0.2) !important;
}

.dark .fi-ac-btn-action:hover {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1f2937 !important;
}

.dark .fi-global-search-input {
    background: #4b5563 !important;
    color: #ffffff !important;
    border-color: rgba(251, 191, 36, 0.3) !important;
}

.dark .fi-global-search-input::placeholder {
    color: #d1d5db !important;
}

/* Additional Form Styling */
.fi-fo-field-wrp {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%) !important;
    border-radius: 16px !important;
    padding: 16px !important;
    border: 2px solid rgba(30, 64, 175, 0.1) !important;
    transition: all 0.3s ease !important;
}

.fi-fo-field-wrp:hover {
    border-color: rgba(251, 191, 36, 0.3) !important;
    box-shadow: 0 4px 12px rgba(251, 191, 36, 0.1) !important;
}

/* Sidebar Toggle Button */
.fi-sidebar-close-btn,
.fi-sidebar-open-btn {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1e40af !important;
    border-radius: 12px !important;
    transition: all 0.3s ease !important;
}

.fi-sidebar-close-btn:hover,
.fi-sidebar-open-btn:hover {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%) !important;
    color: white !important;
    transform: scale(1.1) !important;
}

/* EMERGENCY FIX - Force ALL buttons to be visible */
* {
    color: inherit !important;
}

body * {
    visibility: visible !important;
}

/* Force Header Actions Visibility - Ultra Specific */
header .fi-header-actions,
header .fi-header-actions-ctn,
header [data-filament-header-actions],
.fi-topbar .fi-header-actions,
.fi-topbar .fi-header-actions-ctn,
.fi-header .fi-header-actions,
.fi-header .fi-header-actions-ctn {
    display: flex !important;
    visibility: visible !important;
    opacity: 1 !important;
    position: relative !important;
    z-index: 9999 !important;
    background: red !important;
    padding: 10px !important;
    border-radius: 8px !important;
}

header .fi-header-actions > *,
header .fi-header-actions-ctn > *,
.fi-topbar .fi-header-actions > *,
.fi-topbar .fi-header-actions-ctn > *,
.fi-header .fi-header-actions > *,
.fi-header .fi-header-actions-ctn > * {
    display: block !important;
    visibility: visible !important;
    opacity: 1 !important;
}

/* Light Theme Header Actions */
.fi-header-actions .fi-btn,
.fi-header-actions-ctn .fi-btn {
    display: inline-flex !important;
    visibility: visible !important;
    opacity: 1 !important;
    background: #1e40af !important;
    color: #ffffff !important;
    border: 2px solid #1e40af !important;
    border-radius: 12px !important;
    padding: 8px 16px !important;
    font-weight: 600 !important;
    font-size: 14px !important;
    line-height: 1.5 !important;
    text-decoration: none !important;
    cursor: pointer !important;
    transition: all 0.3s ease !important;
    box-shadow: 0 2px 8px rgba(30, 64, 175, 0.3) !important;
    min-height: 36px !important;
    align-items: center !important;
    justify-content: center !important;
}

.fi-header-actions .fi-btn:hover,
.fi-header-actions-ctn .fi-btn:hover {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%) !important;
    color: white !important;
    border-color: #fbbf24 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 4px 12px rgba(30, 64, 175, 0.4) !important;
}

/* Dark Theme Header Actions */
.dark .fi-header-actions .fi-btn,
.dark .fi-header-actions-ctn .fi-btn {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1f2937 !important;
    border-color: #1f2937 !important;
}

.dark .fi-header-actions .fi-btn:hover,
.dark .fi-header-actions-ctn .fi-btn:hover {
    background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%) !important;
    color: white !important;
    border-color: #fbbf24 !important;
}

/* MAKE ALL BUTTONS VISIBLE WITH ORIGINAL HOVER EFFECTS */
.fi-btn,
.fi-form-actions .fi-btn,
.fi-modal-footer .fi-btn,
.fi-header-actions .fi-btn,
button[type="submit"],
button[type="button"] {
    display: inline-flex !important;
    visibility: visible !important;
    opacity: 1 !important;
}

/* Restore hover effects from original CSS */
.fi-btn-primary {
    background: #1e40af !important;
    border: 1px solid #1e40af !important;
    color: #ffffff !important;
}

.fi-btn {
    background: #1e40af !important;
    color: white !important;
    border: 1px solid #1e40af !important;
}

.fi-btn-primary:hover {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1e40af !important;
}

.fi-header-actions .fi-btn {
    background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%) !important;
    color: #1e40af !important;
    border: 1px solid #f59e0b !important;
    font-weight: 600 !important;
}

.fi-header-actions .fi-btn:hover {
    background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%) !important;
    color: #1e40af !important;
}

</style>