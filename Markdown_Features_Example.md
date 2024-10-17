# Markdown Features Example

## 1. Headings
Headings are created by using the `#` symbol. More `#` symbols indicate a smaller heading.

```markdown
# H1 - Main Heading
## H2 - Subheading
### H3 - Sub-subheading
#### H4
##### H5
###### H6
```

## 2. Bold and Italic Text
- **Bold**: Use `**` or `__` around text.
- *Italic*: Use `*` or `_` around text.

```markdown
**This is bold text**
__This is also bold text__

*This is italic text*
_This is also italic text_
```

## 3. Lists
- **Unordered lists**: Use `*`, `+`, or `-` followed by a space.
- **Ordered lists**: Use numbers followed by a period.

```markdown
- Item 1
- Item 2
  - Subitem 1
  - Subitem 2

1. First item
2. Second item
```

## 4. Links
Links are created by placing the text in square brackets `[]` and the URL in parentheses `()`.

```markdown
[GitHub](https://github.com)
```

## 5. Images
Images are similar to links but with an exclamation mark `!` at the beginning.

```markdown
![Alt text](https://example.com/image.jpg)
```

## 6. Blockquotes
Use `>` to create blockquotes.

```markdown
> This is a blockquote.
> 
> It can span multiple lines.
```

## 7. Code
- **Inline code**: Wrap text in single backticks `` ` ``.
- **Code blocks**: Wrap text in triple backticks ````` or indent with 4 spaces.

```markdown
Here is some inline `code`.

```
Code block:
def hello():
    print("Hello, World!")
```

Or using a language for syntax highlighting:

```python
def hello():
    print("Hello, World!")
```

## 8. Horizontal Rule
A horizontal rule (line) is created with `---`, `***`, or `___`.

```markdown
---
```

## 9. Tables
Tables are created using `|` to separate columns and `-` for the table headers.

```markdown
| Header 1 | Header 2 | Header 3 |
|----------|----------|----------|
| Row 1    | Data 1   | Data 2   |
| Row 2    | Data 3   | Data 4   |
```

## 10. Strikethrough
Use `~~` around text to create strikethrough.

```markdown
~~This text is crossed out~~
```

## 11. Task Lists
Use `- [ ]` for a task list. Mark it as completed with `- [x]`.

```markdown
- [ ] Task 1
- [x] Task 2
```

## 12. Footnotes
Some platforms like GitHub support footnotes.

```markdown
Here is a sentence with a footnote[^1].

[^1]: This is the footnote.
```

## 13. Definition Lists
Definition lists use a term followed by a colon and then the definition.

```markdown
Term 1
: Definition 1

Term 2
: Definition 2
```

## 14. HTML
You can also use raw HTML tags inside Markdown for more control over the formatting.

```markdown
<div style="color: red;">This is red text.</div>
```

