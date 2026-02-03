# Agent Documentation

This directory contains task-specific documentation following the **Progressive Disclosure** pattern recommended in the [HumanLayer CLAUDE.md article](https://www.humanlayer.dev/blog/writing-a-good-claude-md).

## Purpose

Rather than stuffing all possible instructions into `CLAUDE.md`, we keep task-specific guidance here. AI agents should:

1. Read the main `CLAUDE.md` first for project overview
2. Identify which (if any) of these docs are relevant to the current task
3. Read only the relevant docs before starting work

## Available Documentation

- **`deployment.md`** - How to build and deploy the site (both main PHP site and 3D app)
- **`3d_development.md`** - Architecture, patterns, and workflows for the 3D React application
- **styling_conventions.md`** - CSS patterns, design philosophy, and styling guidelines
- **`project_history.md`** - Context on past decisions, known issues, and project evolution

## When to Use

**Working on deployment?** → Read `deployment.md`

**Modifying the 3D app?** → Read `3d_development.md`

**Changing styles or design?** → Read `styling_conventions.md`

**Need context on why something is the way it is?** → Read `project_history.md`

**Unsure?** → Ask the user which docs to read, or read the ones that seem most relevant.

## Principles

Following the article's recommendations:

- **Less is more**: Each doc focuses on one area
- **Universally applicable content stays in CLAUDE.md**: Only task-specific details here
- **Avoid code snippets**: Point to file:line references instead (they stay up-to-date)
- **Keep it concise**: Each doc should be scannable and focused

## Maintenance

These docs should be updated when:
- Project structure changes significantly
- New patterns or conventions are established
- Important context emerges from development work
- Deployment processes change
