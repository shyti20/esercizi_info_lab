namespace Esercizio30
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            CheckBox = new GroupBox();
            checkBoxAll = new CheckBox();
            checkBoxAsp = new CheckBox();
            checkBoxQuery = new CheckBox();
            checkBoxMVC = new CheckBox();
            checkBoxWCF = new CheckBox();
            CheckBox.SuspendLayout();
            SuspendLayout();
            // 
            // CheckBox
            // 
            CheckBox.Controls.Add(checkBoxWCF);
            CheckBox.Controls.Add(checkBoxMVC);
            CheckBox.Controls.Add(checkBoxQuery);
            CheckBox.Controls.Add(checkBoxAsp);
            CheckBox.Controls.Add(checkBoxAll);
            CheckBox.Location = new Point(290, 144);
            CheckBox.Name = "CheckBox";
            CheckBox.Size = new Size(241, 127);
            CheckBox.TabIndex = 0;
            CheckBox.TabStop = false;
            CheckBox.Text = "groupBox1";
            // 
            // checkBoxAll
            // 
            checkBoxAll.AutoSize = true;
            checkBoxAll.Location = new Point(6, 22);
            checkBoxAll.Name = "checkBoxAll";
            checkBoxAll.Size = new Size(74, 19);
            checkBoxAll.TabIndex = 0;
            checkBoxAll.Text = "Select All";
            checkBoxAll.UseVisualStyleBackColor = true;
            checkBoxAll.CheckedChanged += checked_All;
            // 
            // checkBoxAsp
            // 
            checkBoxAsp.AutoSize = true;
            checkBoxAsp.Location = new Point(7, 61);
            checkBoxAsp.Name = "checkBoxAsp";
            checkBoxAsp.Size = new Size(70, 19);
            checkBoxAsp.TabIndex = 1;
            checkBoxAsp.Text = "Asp.NET";
            checkBoxAsp.UseVisualStyleBackColor = true;
            checkBoxAsp.CheckedChanged += checked_All;
            // 
            // checkBoxQuery
            // 
            checkBoxQuery.AutoSize = true;
            checkBoxQuery.Location = new Point(7, 91);
            checkBoxQuery.Name = "checkBoxQuery";
            checkBoxQuery.Size = new Size(61, 19);
            checkBoxQuery.TabIndex = 2;
            checkBoxQuery.Text = "jQuery";
            checkBoxQuery.UseVisualStyleBackColor = true;
            checkBoxQuery.CheckedChanged += checked_All;
            // 
            // checkBoxMVC
            // 
            checkBoxMVC.AutoSize = true;
            checkBoxMVC.Location = new Point(121, 62);
            checkBoxMVC.Name = "checkBoxMVC";
            checkBoxMVC.Size = new Size(52, 19);
            checkBoxMVC.TabIndex = 3;
            checkBoxMVC.Text = "MVC";
            checkBoxMVC.UseVisualStyleBackColor = true;
            checkBoxMVC.CheckedChanged += checked_All;
            // 
            // checkBoxWCF
            // 
            checkBoxWCF.AutoSize = true;
            checkBoxWCF.Location = new Point(119, 91);
            checkBoxWCF.Name = "checkBoxWCF";
            checkBoxWCF.Size = new Size(51, 19);
            checkBoxWCF.TabIndex = 4;
            checkBoxWCF.Text = "WCF";
            checkBoxWCF.UseVisualStyleBackColor = true;
            checkBoxWCF.CheckedChanged += checked_All;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(800, 450);
            Controls.Add(CheckBox);
            Name = "Form1";
            Text = "Form1";
            CheckBox.ResumeLayout(false);
            CheckBox.PerformLayout();
            ResumeLayout(false);
        }

        #endregion

        private GroupBox CheckBox;
        private CheckBox checkBoxWCF;
        private CheckBox checkBoxMVC;
        private CheckBox checkBoxQuery;
        private CheckBox checkBoxAsp;
        private CheckBox checkBoxAll;
    }
}